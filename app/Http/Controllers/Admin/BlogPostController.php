<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogPostController extends Controller
{
    public function index(): View
    {
        return view('admin.blog.index', [
            'posts' => BlogPost::query()->with('category')->latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        return view('admin.blog.form', [
            'post' => new BlogPost(),
            'categories' => BlogCategory::query()->orderBy('name')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['slug'] = $this->slug($data['slug'] ?? null, $data['title']);
        $data['is_published'] = $request->boolean('is_published');
        $data['published_at'] = $data['is_published'] ? ($data['published_at'] ?? now()) : null;

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('blog', 'public');
        }

        BlogPost::query()->create($data);

        return redirect()->route('admin.blog.index')->with('success', 'Article créé.');
    }

    public function edit(BlogPost $post): View
    {
        return view('admin.blog.form', [
            'post' => $post,
            'categories' => BlogCategory::query()->orderBy('name')->get(),
        ]);
    }

    public function update(Request $request, BlogPost $post): RedirectResponse
    {
        $data = $this->validated($request, $post);
        $data['slug'] = $this->slug($data['slug'] ?? null, $data['title'], $post);
        $data['is_published'] = $request->boolean('is_published');
        $data['published_at'] = $data['is_published'] ? ($data['published_at'] ?? now()) : null;

        if ($request->hasFile('cover_image')) {
            if ($post->cover_image) {
                Storage::disk('public')->delete($post->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')->store('blog', 'public');
        }

        $post->update($data);

        return redirect()->route('admin.blog.index')->with('success', 'Article mis à jour.');
    }

    public function destroy(BlogPost $post): RedirectResponse
    {
        if ($post->cover_image) {
            Storage::disk('public')->delete($post->cover_image);
        }

        $post->delete();

        return back()->with('success', 'Article supprimé.');
    }

    private function validated(Request $request, ?BlogPost $post = null): array
    {
        return $request->validate([
            'blog_category_id' => ['required', 'exists:blog_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('blog_posts', 'slug')->ignore($post)],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'cover_image' => ['nullable', 'image', 'max:3072'],
            'published_at' => ['nullable', 'date'],
        ], [
            'blog_category_id.required' => 'La categorie est obligatoire.',
            'blog_category_id.exists' => 'La categorie selectionnee est invalide.',
            'title.required' => 'Le titre est obligatoire.',
            'title.max' => 'Le titre ne doit pas depasser 255 caracteres.',
            'slug.unique' => 'Ce slug est deja utilise par un autre article.',
            'excerpt.max' => 'L extrait ne doit pas depasser 500 caracteres.',
            'content.required' => 'Le contenu de l article est obligatoire.',
            'cover_image.image' => 'L image mise en avant doit etre un fichier image.',
            'cover_image.max' => 'L image mise en avant ne doit pas depasser 3 Mo.',
            'published_at.date' => 'La date de publication est invalide.',
        ]);
    }

    private function slug(?string $slug, string $title, ?BlogPost $post = null): string
    {
        $base = Str::slug($slug ?: $title);
        $candidate = $base;
        $i = 2;

        while (BlogPost::query()->where('slug', $candidate)->when($post, fn ($query) => $query->whereKeyNot($post->id))->exists()) {
            $candidate = "{$base}-{$i}";
            $i++;
        }

        return $candidate;
    }
}
