@extends('layouts.dashboard')

@section('title', 'Profil | Just Agro Group')
@section('heading', 'Mon profil')

@section('content')
<div class="grid gap-8 lg:grid-cols-[1fr_0.9fr]">
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="rounded-[2rem] bg-white p-8 shadow-soft">
        @csrf
        @method('PATCH')

        @if (session('status') === 'profile-updated')
            <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 px-5 py-4 text-sm text-green-700">Profil mis à jour.</div>
        @endif

        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Informations du compte</h2>

        <div class="mt-6 grid gap-6 lg:grid-cols-2">
            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Nom</span>
                <input name="name" value="{{ old('name', $user->name) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                @error('name') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
            </label>

            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Email</span>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                @error('email') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
            </label>

            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Téléphone</span>
                <input name="phone" value="{{ old('phone', $user->phone) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>

            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Organisation / entreprise</span>
                <input name="organization" value="{{ old('organization', $user->organization) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>

            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Photo de profil</span>
                <input type="file" name="avatar" accept="image/*" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>

            <label class="block">
                <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Logo</span>
                <input type="file" name="logo" accept="image/*" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </label>
        </div>

        <button class="mt-8 rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">Enregistrer</button>
    </form>

    <div class="space-y-8">
        <div class="rounded-[2rem] bg-white p-8 shadow-soft">
            <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Mot de passe</h2>
            <div class="mt-6">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="rounded-[2rem] bg-white p-8 shadow-soft">
            <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Suppression du compte</h2>
            <div class="mt-6">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
