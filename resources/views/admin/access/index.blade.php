@extends('layouts.dashboard')

@section('title', 'Accès & rôles | Just Agro Group')
@section('heading', 'Accès & rôles')

@section('content')
<div class="rounded-[2rem] bg-white p-6 shadow-soft">
    <div class="flex items-center justify-between gap-4">
        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Utilisateurs</h2>
        <a href="{{ route('admin.access.create') }}" class="rounded-full bg-jagGreen px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Créer un accès</a>
    </div>

    <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200">
        @foreach ($users as $user)
            <div class="grid gap-3 border-t border-slate-200 px-5 py-4 text-sm first:border-t-0 lg:grid-cols-4">
                <div class="font-semibold text-jagNavy">{{ $user->name }}</div>
                <div>{{ $user->email }}</div>
                <div>{{ $user->role->label() }}</div>
                <div class="text-slate-500">{{ $user->created_at->format('d/m/Y') }}</div>
            </div>
        @endforeach
    </div>

    <div class="mt-6">{{ $users->links() }}</div>
</div>

<div class="mt-8 rounded-[2rem] bg-white p-6 shadow-soft">
    <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Espaces clients récents</h2>
    <div class="mt-6 grid gap-4 lg:grid-cols-2">
        @forelse ($projects as $project)
            <div class="rounded-2xl border border-slate-200 p-5">
                <div class="font-semibold text-jagNavy">{{ $project->name }}</div>
                <div class="mt-1 text-sm text-jagText">{{ $project->client->name }} — {{ $project->pole === 'pole_1' ? 'Pôle 1' : 'Pôle 2' }}</div>
            </div>
        @empty
            <p class="text-sm text-slate-500">Aucun espace client.</p>
        @endforelse
    </div>
</div>
@endsection
