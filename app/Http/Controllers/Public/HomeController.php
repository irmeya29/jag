<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Project;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.home', [
            'featuredProjects' => Project::query()
                ->latest()
                ->take(4)
                ->get(),

            'latestPosts' => BlogPost::query()
                ->published()
                ->latest('published_at')
                ->take(3)
                ->get(),
        ]);
    }
}