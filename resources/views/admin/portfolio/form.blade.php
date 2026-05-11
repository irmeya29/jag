@extends('layouts.dashboard')

@section('title', ($project->exists ? 'Modifier' : 'Creer').' une realisation | Just Agro Group')
@section('heading', $project->exists ? 'Modifier une realisation' : 'Creer une realisation')

@section('content')
<form method="POST" action="{{ $project->exists ? route('admin.portfolio.update', $project) : route('admin.portfolio.store') }}" enctype="multipart/form-data" class="rounded-[2rem] bg-white p-8 shadow-soft">
    @csrf
    @if ($project->exists) @method('PUT') @endif

    @include('admin.partials.form-errors')

    <div class="grid gap-6 lg:grid-cols-2">
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Titre</span>
            <input name="title" value="{{ old('title', $project->title) }}" class="mt-2 w-full rounded-2xl border @error('title') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('title')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Slug</span>
            <input name="slug" value="{{ old('slug', $project->slug) }}" placeholder="auto si vide" class="mt-2 w-full rounded-2xl border @error('slug') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('slug')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Pole</span>
            <select name="pole" class="mt-2 w-full rounded-2xl border @error('pole') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
                <option value="pole_1" @selected(old('pole', $project->pole) === 'pole_1')>Pole 1 - Investisseur</option>
                <option value="pole_2" @selected(old('pole', $project->pole) === 'pole_2')>Pole 2 - Industriel</option>
            </select>
            @error('pole')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>

        <div>
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Image mise en avant</span>
            @if ($project->cover_image)
                <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}" class="mt-2 h-32 w-full rounded-2xl object-cover">
            @endif
            <input type="file" name="cover_image" accept="image/*" class="mt-2 w-full rounded-2xl border @error('cover_image') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('cover_image')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Localisation</span>
            <input name="location" value="{{ old('location', $project->location) }}" class="mt-2 w-full rounded-2xl border @error('location') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('location')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Culture / produit</span>
            <input name="culture" value="{{ old('culture', $project->culture) }}" class="mt-2 w-full rounded-2xl border @error('culture') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('culture')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Superficie (ha)</span>
            <input type="number" step="0.01" name="surface_hectare" value="{{ old('surface_hectare', $project->surface_hectare) }}" class="mt-2 w-full rounded-2xl border @error('surface_hectare') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('surface_hectare')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Statut</span>
            <select name="status" class="mt-2 w-full rounded-2xl border @error('status') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
                <option value="en_cours" @selected(old('status', $project->status) === 'en_cours')>En cours</option>
                <option value="termine" @selected(old('status', $project->status) === 'termine')>Termine</option>
            </select>
            @error('status')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>
    </div>

    <label class="mt-6 block">
        <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Type de prestation</span>
        <input name="service_type" value="{{ old('service_type', $project->service_type) }}" class="mt-2 w-full rounded-2xl border @error('service_type') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
        @error('service_type')
            <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
        @enderror
    </label>

    <label class="mt-6 block">
        <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Resume / description</span>
        <textarea name="summary" rows="6" class="mt-2 w-full rounded-2xl border @error('summary') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">{{ old('summary', $project->summary) }}</textarea>
        @error('summary')
            <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
        @enderror
    </label>

    <div class="mt-8 flex flex-wrap items-center gap-3">
        <button class="rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">Enregistrer</button>
        <a href="{{ route('admin.portfolio.index') }}" class="rounded-full border border-slate-200 px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagNavy">Annuler</a>
    </div>
</form>
@endsection
