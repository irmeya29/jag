@extends('layouts.dashboard')

@section('title', ($project->exists ? 'Modifier' : 'Créer').' une réalisation | Just Agro Group')
@section('heading', $project->exists ? 'Modifier une réalisation' : 'Créer une réalisation')

@section('content')
<form method="POST" action="{{ $project->exists ? route('admin.portfolio.update', $project) : route('admin.portfolio.store') }}" enctype="multipart/form-data" class="rounded-[2rem] bg-white p-8 shadow-soft">
    @csrf
    @if ($project->exists) @method('PUT') @endif

    @if ($errors->any())
        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">Merci de corriger les champs.</div>
    @endif

    <div class="grid gap-6 lg:grid-cols-2">
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Titre</span>
            <input name="title" value="{{ old('title', $project->title) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Slug</span>
            <input name="slug" value="{{ old('slug', $project->slug) }}" placeholder="auto si vide" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Pôle</span>
            <select name="pole" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                <option value="pole_1" @selected(old('pole', $project->pole) === 'pole_1')>Pôle 1 — Investisseur</option>
                <option value="pole_2" @selected(old('pole', $project->pole) === 'pole_2')>Pôle 2 — Industriel</option>
            </select>
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Image</span>
            <input type="file" name="cover_image" accept="image/*" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Localisation</span>
            <input name="location" value="{{ old('location', $project->location) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Culture / produit</span>
            <input name="culture" value="{{ old('culture', $project->culture) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Superficie (ha)</span>
            <input type="number" step="0.01" name="surface_hectare" value="{{ old('surface_hectare', $project->surface_hectare) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Statut</span>
            <select name="status" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                <option value="en_cours" @selected(old('status', $project->status) === 'en_cours')>En cours</option>
                <option value="termine" @selected(old('status', $project->status) === 'termine')>Terminé</option>
            </select>
        </label>
    </div>

    <label class="mt-6 block">
        <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Type de prestation</span>
        <input name="service_type" value="{{ old('service_type', $project->service_type) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
    </label>

    <label class="mt-6 block">
        <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Résumé / description</span>
        <textarea name="summary" rows="6" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">{{ old('summary', $project->summary) }}</textarea>
    </label>

    <button class="mt-8 rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">Enregistrer</button>
</form>
@endsection
