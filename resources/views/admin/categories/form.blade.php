@extends('layouts.dashboard')

@section('title', ($category->exists ? 'Modifier' : 'Creer').' une categorie | Just Agro Group')
@section('heading', $category->exists ? 'Modifier une categorie' : 'Creer une categorie')

@section('content')
<form method="POST" action="{{ $category->exists ? route('admin.categories.update', $category) : route('admin.categories.store') }}" class="rounded-[2rem] bg-white p-8 shadow-soft">
    @csrf
    @if ($category->exists) @method('PUT') @endif

    @include('admin.partials.form-errors')

    <div class="grid gap-6 lg:grid-cols-2">
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Nom</span>
            <input name="name" value="{{ old('name', $category->name) }}" class="mt-2 w-full rounded-2xl border @error('name') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('name')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Slug</span>
            <input name="slug" value="{{ old('slug', $category->slug) }}" placeholder="auto si vide" class="mt-2 w-full rounded-2xl border @error('slug') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('slug')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>
    </div>

    <div class="mt-8 flex flex-wrap items-center gap-3">
        <button class="rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">Enregistrer</button>
        <a href="{{ route('admin.categories.index') }}" class="rounded-full border border-slate-200 px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagNavy">Annuler</a>
    </div>
</form>
@endsection
