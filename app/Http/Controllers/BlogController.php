<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index', [
            'posts' => BlogPost::query()
                ->with('category')
                ->published()
                ->latest('published_at')
                ->paginate(9),
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