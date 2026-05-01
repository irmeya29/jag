@extends('layouts.dashboard')

@section('title', 'Demande client | Just Agro Group')
@section('heading', 'Détail de la demande')

@section('content')
<div class="grid gap-8 lg:grid-cols-[1fr_0.9fr]">
    <div class="rounded-[2rem] bg-white p-8 shadow-soft">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">{{ $lead->profile_type }}</p>
        <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy">{{ $lead->name }}</h2>
        <div class="mt-6 space-y-3 text-sm leading-7 text-jagText">
            <p><span class="font-semibold text-jagNavy">Email :</span> {{ $lead->email }}</p>
            <p><span class="font-semibold text-jagNavy">Téléphone :</span> {{ $lead->phone }}</p>
            @if ($lead->company)<p><span class="font-semibold text-jagNavy">Entreprise :</span> {{ $lead->company }}</p>@endif
            @if ($lead->land_location)<p><span class="font-semibold text-jagNavy">Terrain :</span> {{ $lead->land_location }} — {{ $lead->land_size_hectare }} ha</p>@endif
            @if ($lead->requested_product)<p><span class="font-semibold text-jagNavy">Produit :</span> {{ $lead->requested_product }} — {{ $lead->annual_volume }} / an</p>@endif
            <p><span class="font-semibold text-jagNavy">Message :</span><br>{{ $lead->message }}</p>
        </div>
    </div>

    <div class="space-y-6">
        @if ($lead->status !== 'approuve')
            <form method="POST" action="{{ route('admin.leads.approve', $lead) }}" class="rounded-[2rem] bg-white p-8 shadow-soft">
                @csrf
                <h3 class="font-heading text-2xl font-extrabold text-jagNavy">Approuver et créer l’accès</h3>
                <label class="mt-6 block">
                    <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Nom du projet / programme</span>
                    <input name="project_name" value="{{ old('project_name', $lead->profile_type === 'investisseur' ? 'Projet agricole '.$lead->name : 'Programme approvisionnement '.$lead->company) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                </label>
                <label class="mt-5 block">
                    <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Mot de passe temporaire</span>
                    <input name="password" placeholder="Auto si vide" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                </label>
                <label class="mt-5 block">
                    <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Note interne</span>
                    <textarea name="admin_notes" rows="3" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">{{ old('admin_notes') }}</textarea>
                </label>
                <button class="mt-6 rounded-full bg-jagGreen px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">Approuver</button>
            </form>
        @endif

        @if ($lead->status !== 'archive')
            <form method="POST" action="{{ route('admin.leads.archive', $lead) }}" class="rounded-[2rem] bg-white p-8 shadow-soft">
                @csrf
                <h3 class="font-heading text-2xl font-extrabold text-jagNavy">Archiver</h3>
                <textarea name="admin_notes" rows="3" placeholder="Motif ou note interne" class="mt-5 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm"></textarea>
                <button class="mt-6 rounded-full bg-jagNavy px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">Archiver</button>
            </form>
        @endif
    </div>
</div>
@endsection
