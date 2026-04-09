<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        return view('pages.about');
    }

    public function poleOne(): View
    {
        return view('pages.pole-1');
    }

    public function poleTwo(): View
    {
        return view('pages.pole-2');
    }

    public function process(): View
    {
        return view('pages.process');
    }

    public function portfolio(): View
    {
        return view('pages.portfolio', [
            'projects' => Project::query()->latest()->paginate(9),
        ]);
    }

    public function monEspaceJust(): View
    {
        return view('pages.mon-espace-just');
    }

    public function mentionsLegales(): View
    {
        return view('pages.mentions-legales');
    }
}