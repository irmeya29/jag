<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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

    public function portfolio(Request $request): View
    {
        $selectedPole = $request->string('pole')->toString();
        $selectedPole = in_array($selectedPole, ['pole_1', 'pole_2'], true) ? $selectedPole : null;

        return view('pages.portfolio', [
            'projects' => Project::query()
                ->when($selectedPole, fn ($query) => $query->where('pole', $selectedPole))
                ->latest()
                ->paginate(9)
                ->withQueryString(),
            'selectedPole' => $selectedPole,
            'poles' => [
                'pole_1' => 'Pole 1',
                'pole_2' => 'Pole 2',
            ],
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
