<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactLeadRequest;
use App\Models\ContactLead;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('pages.contact');
    }

    public function store(StoreContactLeadRequest $request): RedirectResponse
    {
        ContactLead::query()->create($request->safe()->except('website'));

        return back()->with('success', 'Votre demande a été envoyée avec succès.');
    }
}