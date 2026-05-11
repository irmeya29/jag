<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PortfolioProjectController extends Controller
{
    public function index(): View
    {
        return view('admin.portfolio.index', [
            'projects' => Project::query()->latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.portfolio.form', ['project' => new Project()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['slug'] = $this->slug($data['slug'] ?? null, $data['title']);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('portfolio', 'public');
        }

        Project::query()->create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Réalisation créée.');
    }

    public function edit(Project $portfolio): View
    {
        return view('admin.portfolio.form', ['project' => $portfolio]);
    }

    public function update(Request $request, Project $portfolio): RedirectResponse
    {
        $data = $this->validated($request, $portfolio);
        $data['slug'] = $this->slug($data['slug'] ?? null, $data['title'], $portfolio);

        if ($request->hasFile('cover_image')) {
            if ($portfolio->cover_image) {
                Storage::disk('public')->delete($portfolio->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')->store('portfolio', 'public');
        }

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Réalisation mise à jour.');
    }

    public function destroy(Project $portfolio): RedirectResponse
    {
        if ($portfolio->cover_image) {
            Storage::disk('public')->delete($portfolio->cover_image);
        }

        $portfolio->delete();

        return back()->with('success', 'Réalisation supprimée.');
    }

    private function validated(Request $request, ?Project $project = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('projects', 'slug')->ignore($project)],
            'pole' => ['required', Rule::in(['pole_1', 'pole_2'])],
            'culture' => ['nullable', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'surface_hectare' => ['nullable', 'numeric', 'min:0'],
            'service_type' => ['required', 'string', 'max:255'],
            'status' => ['required', Rule::in(['en_cours', 'termine'])],
            'summary' => ['nullable', 'string'],
            'cover_image' => ['nullable', 'image', 'max:3072'],
        ], [
            'title.required' => 'Le titre est obligatoire.',
            'title.max' => 'Le titre ne doit pas depasser 255 caracteres.',
            'slug.unique' => 'Ce slug est deja utilise par une autre realisation.',
            'pole.required' => 'Le pole est obligatoire.',
            'pole.in' => 'Le pole selectionne est invalide.',
            'culture.max' => 'La culture ou le produit ne doit pas depasser 255 caracteres.',
            'location.required' => 'La localisation est obligatoire.',
            'location.max' => 'La localisation ne doit pas depasser 255 caracteres.',
            'surface_hectare.numeric' => 'La superficie doit etre un nombre.',
            'surface_hectare.min' => 'La superficie ne peut pas etre negative.',
            'service_type.required' => 'Le type de prestation est obligatoire.',
            'service_type.max' => 'Le type de prestation ne doit pas depasser 255 caracteres.',
            'status.required' => 'Le statut est obligatoire.',
            'status.in' => 'Le statut selectionne est invalide.',
            'cover_image.image' => 'L image mise en avant doit etre un fichier image.',
            'cover_image.max' => 'L image mise en avant ne doit pas depasser 3 Mo.',
        ]);
    }

    private function slug(?string $slug, string $title, ?Project $project = null): string
    {
        $base = Str::slug($slug ?: $title);
        $candidate = $base;
        $i = 2;

        while (Project::query()->where('slug', $candidate)->when($project, fn ($query) => $query->whereKeyNot($project->id))->exists()) {
            $candidate = "{$base}-{$i}";
            $i++;
        }

        return $candidate;
    }
}
