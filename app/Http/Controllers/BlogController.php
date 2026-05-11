<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $selectedCategory = null;

        if ($request->filled('categorie')) {
            $selectedCategory = BlogCategory::query()
                ->where('slug', $request->string('categorie'))
                ->firstOrFail();
        }

        return view('blog.index', [
            'categories' => BlogCategory::query()
                ->withCount(['posts' => fn ($query) => $query->published()])
                ->orderBy('name')
                ->get(),
            'posts' => BlogPost::query()
                ->with('category')
                ->published()
                ->when($selectedCategory, fn ($query) => $query->whereBelongsTo($selectedCategory, 'category'))
                ->latest('published_at')
                ->paginate(9)
                ->withQueryString(),
            'selectedCategory' => $selectedCategory,
        ]);
    }

    public function show(BlogPost $post): View
    {
        abort_unless($post->is_published, 404);

        return view('blog.show', [
            'post' => $post->load('category'),
        ]);
    }
}
