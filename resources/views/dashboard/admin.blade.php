@extends('layouts.dashboard')

@section('title', 'Admin | Just Agro Group')
@section('heading', 'Pilotage administrateur')

@section('content')
<div class="grid gap-6 md:grid-cols-3">
    <div class="rounded-[2rem] bg-white p-6 shadow-soft">
        <div class="text-sm text-slate-500">Utilisateurs</div>
        <div class="mt-3 font-heading text-4xl font-extrabold text-jagNavy">{{ $usersCount }}</div>
    </div>
    <div class="rounded-[2rem] bg-white p-6 shadow-soft">
        <div class="text-sm text-slate-500">Projets actifs</div>
        <div class="mt-3 font-heading text-4xl font-extrabold text-jagGreen">{{ $activeProjectsCount }}</div>
    </div>
    <div class="rounded-[2rem] bg-white p-6 shadow-soft">
        <div class="text-sm text-slate-500">Alertes ouvertes</div>
        <div class="mt-3 font-heading text-4xl font-extrabold text-jagOrange">{{ $pendingAlertsCount }}</div>
    </div>
</div>

<div class="mt-8 rounded-[2rem] bg-white p-6 shadow-soft">
    <div class="flex items-center justify-between gap-4">
        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Derniers espaces clients</h2>
        <a href="{{ route('admin.access.create') }}" class="rounded-full bg-jagGreen px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Créer un accès</a>
    </div>

    <div class="mt-6 space-y-3">
        @forelse ($recentProjects as $project)
            <div class="rounded-2xl border border-slate-200 px-5 py-4">
                <div class="font-semibold text-jagNavy">{{ $project->name }}</div>
                <div class="mt-1 text-sm text-jagText">{{ $project->client->name }} — {{ $project->pole === 'pole_1' ? 'Investisseur privé' : 'Industriel / transformateur' }}</div>
            </div>
        @empty
            <p class="text-sm text-slate-500">Aucun espace client pour le moment.</p>
        @endforelse
    </div>
</div>
@endsection
