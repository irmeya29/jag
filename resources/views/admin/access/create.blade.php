@extends('layouts.dashboard')

@section('title', 'Créer un accès | Just Agro Group')
@section('heading', 'Créer un accès')

@section('content')
<form method="POST" action="{{ route('admin.access.store') }}" class="rounded-[2rem] bg-white p-8 shadow-soft">
    @csrf

    @if ($errors->any())
        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">
            Merci de corriger les champs indiqués.
        </div>
    @endif

    <div class="grid gap-6 lg:grid-cols-2">
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Nom</span>
            <input name="name" value="{{ old('name') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            @error('name') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Email</span>
            <input type="email" name="email" value="{{ old('email') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            @error('email') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Mot de passe temporaire</span>
            <input type="password" name="password" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            @error('password') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Téléphone</span>
            <input name="phone" value="{{ old('phone') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Organisation / entreprise</span>
            <input name="organization" value="{{ old('organization') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Rôle</span>
            <select name="role" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                @foreach ($roles as $role)
                    <option value="{{ $role->value }}" @selected(old('role') === $role->value)>{{ $role->label() }}</option>
                @endforeach
            </select>
            @error('role') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
        </label>
    </div>

    <div class="mt-10 border-t border-slate-200 pt-8">
        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Espace client rattaché</h2>
        <p class="mt-2 text-sm text-jagText">À remplir pour un investisseur ou un industriel. Les éditeurs n’ont pas besoin de projet.</p>

        <div class="mt-6 grid gap-6 lg:grid-cols-2">
            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Nom du projet / programme</span>
                <input name="project_name" value="{{ old('project_name') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>
            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Entreprise</span>
                <input name="company" value="{{ old('company') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>
            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Localisation</span>
                <input name="location" value="{{ old('location') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>
            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Superficie (ha)</span>
                <input type="number" step="0.01" name="surface_hectare" value="{{ old('surface_hectare') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>
            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Cultures / produits</span>
                <input name="cultures" value="{{ old('cultures') }}" placeholder="maïs, riz, soja" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>
            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Cycle / campagne</span>
                <input name="cycle" value="{{ old('cycle') }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>
        </div>
    </div>

    <button class="mt-8 rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
        Créer l’accès
    </button>
</form>
@endsection
