<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogCategoryController extends Controller
{
    public function index(): View
    {
        return view('admin.categories.index', [
            'categories' => BlogCategory::query()
                ->withCount('posts')
                ->orderBy('name')
                ->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.categories.form', [
            'category' => new BlogCategory(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['slug'] = $this->slug($data['slug'] ?? null, $data['name']);

        BlogCategory::query()->create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Categorie creee.');
    }

    public function edit(BlogCategory $category): View
    {
        return view('admin.categories.form', [
            'category' => $category,
        ]);
    }

    public function update(Request $request, BlogCategory $category): RedirectResponse
    {
        $data = $this->validated($request, $category);
        $data['slug'] = $this->slug($data['slug'] ?? null, $data['name'], $category);

        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Categorie mise a jour.');
    }

    public function destroy(BlogCategory $category): RedirectResponse
    {
        if ($category->posts()->exists()) {
            return back()->withErrors([
                'category' => 'Impossible de supprimer cette categorie : elle contient encore des articles.',
            ]);
        }

        $category->delete();

        return back()->with('success', 'Categorie supprimee.');
    }

    private function validated(Request $request, ?BlogCategory $category = null): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('blog_categories', 'slug')->ignore($category)],
        ], [
            'name.required' => 'Le nom de la categorie est obligatoire.',
            'name.max' => 'Le nom ne doit pas depasser 255 caracteres.',
            'slug.unique' => 'Ce slug est deja utilise par une autre categorie.',
            'slug.max' => 'Le slug ne doit pas depasser 255 caracteres.',
        ]);
    }

    private function slug(?string $slug, string $name, ?BlogCategory $category = null): string
    {
        $base = Str::slug($slug ?: $name);
        $candidate = $base ?: Str::random(8);
        $i = 2;

        while (BlogCategory::query()->where('slug', $candidate)->when($category, fn ($query) => $query->whereKeyNot($category->id))->exists()) {
            $candidate = "{$base}-{$i}";
            $i++;
        }

        return $candidate;
    }
}
