<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\ClientProject;
use App\Models\ContactLead;
use App\Models\User;
use App\Notifications\WorkspaceAccessCreated;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class ContactLeadController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->query('status', 'nouveau');

        return view('admin.leads.index', [
            'status' => $status,
            'leads' => ContactLead::query()
                ->when($status !== 'tous', fn ($query) => $query->where('status', $status))
                ->latest()
                ->paginate(15)
                ->withQueryString(),
        ]);
    }

    public function show(ContactLead $lead): View
    {
        return view('admin.leads.show', ['lead' => $lead]);
    }

    public function approve(Request $request, ContactLead $lead): RedirectResponse
    {
        $validated = $request->validate([
            'password' => ['nullable', Password::defaults()],
            'project_name' => ['required', 'string', 'max:255'],
            'admin_notes' => ['nullable', 'string', 'max:2000'],
        ]);

        $password = $validated['password'] ?: Str::password(10);
        $role = $lead->profile_type === 'investisseur' ? UserRole::INVESTISSEUR : UserRole::INDUSTRIEL;

        $user = User::query()->firstOrCreate(
            ['email' => $lead->email],
            [
                'name' => $lead->name,
                'phone' => $lead->phone,
                'organization' => $lead->company,
                'password' => $password,
                'role' => $role,
                'email_verified_at' => now(),
            ]
        );

        $user->forceFill([
            'role' => $role,
            'phone' => $lead->phone,
            'organization' => $lead->company ?: $user->organization,
        ])->save();

        ClientProject::query()->firstOrCreate(
            ['client_id' => $user->id, 'name' => $validated['project_name']],
            [
                'pole' => $lead->profile_type === 'investisseur' ? 'pole_1' : 'pole_2',
                'company' => $lead->company,
                'location' => $lead->land_location,
                'surface_hectare' => $lead->land_size_hectare,
                'cultures' => $lead->requested_product ? [$lead->requested_product] : null,
                'contracted_volume' => $lead->annual_volume,
                'status' => 'en_preparation',
                'summary' => $lead->message,
            ]
        );

        $lead->update([
            'status' => 'approuve',
            'approved_user_id' => $user->id,
            'approved_at' => now(),
            'admin_notes' => $validated['admin_notes'] ?? null,
        ]);

        try {
            $user->notify(new WorkspaceAccessCreated($password));
        } catch (\Throwable $exception) {
            Log::warning('Approved lead email could not be sent.', [
                'lead_id' => $lead->id,
                'user_id' => $user->id,
                'message' => $exception->getMessage(),
            ]);
        }

        return redirect()->route('admin.leads.index')->with('success', 'Demande approuvée et accès créé.');
    }

    public function archive(Request $request, ContactLead $lead): RedirectResponse
    {
        $validated = $request->validate([
            'admin_notes' => ['nullable', 'string', 'max:2000'],
        ]);

        $lead->update([
            'status' => 'archive',
            'archived_at' => now(),
            'admin_notes' => $validated['admin_notes'] ?? null,
        ]);

        return redirect()->route('admin.leads.index', ['status' => 'archive'])->with('success', 'Demande archivée.');
    }
}
