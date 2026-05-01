<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\ClientProject;
use App\Models\User;
use App\Notifications\WorkspaceAccessCreated;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\Password;

class UserAccessController extends Controller
{
    public function index(): View
    {
        return view('admin.access.index', [
            'users' => User::query()->latest()->paginate(15),
            'projects' => ClientProject::query()->with('client')->latest()->limit(8)->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.access.create', [
            'roles' => [UserRole::EDITEUR, UserRole::INVESTISSEUR, UserRole::INDUSTRIEL],
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['nullable', 'string', 'max:30'],
            'organization' => ['nullable', 'string', 'max:255'],
            'password' => ['required', Password::defaults()],
            'role' => ['required', new Enum(UserRole::class)],
            'project_name' => ['nullable', 'required_if:role,investisseur,industriel', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'surface_hectare' => ['nullable', 'numeric', 'min:0'],
            'cultures' => ['nullable', 'string', 'max:255'],
            'cycle' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string', 'max:255'],
        ]);

        $user = User::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'organization' => $validated['organization'] ?? ($validated['company'] ?? null),
            'password' => $validated['password'],
            'role' => $validated['role'],
            'email_verified_at' => now(),
        ]);

        if (in_array($validated['role'], [UserRole::INVESTISSEUR->value, UserRole::INDUSTRIEL->value], true)) {
            ClientProject::query()->create([
                'client_id' => $user->id,
                'pole' => $validated['role'] === UserRole::INVESTISSEUR->value ? 'pole_1' : 'pole_2',
                'name' => $validated['project_name'],
                'company' => $validated['company'] ?? null,
                'location' => $validated['location'] ?? null,
                'surface_hectare' => $validated['surface_hectare'] ?? null,
                'cultures' => filled($validated['cultures'] ?? null)
                    ? array_map('trim', explode(',', $validated['cultures']))
                    : null,
                'cycle' => $validated['cycle'] ?? null,
                'status' => $validated['status'] ?? 'en_preparation',
            ]);
        }

        try {
            $user->notify(new WorkspaceAccessCreated($validated['password']));
        } catch (\Throwable $exception) {
            Log::warning('Workspace access email could not be sent.', [
                'user_id' => $user->id,
                'message' => $exception->getMessage(),
            ]);
        }

        return redirect()
            ->route('admin.access.index')
            ->with('success', 'Accès créé avec succès.');
    }
}
