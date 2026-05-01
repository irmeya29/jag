@extends('layouts.dashboard')

@section('title', 'Réalisations | Just Agro Group')
@section('heading', 'Réalisations')

@section('content')
<div class="rounded-[2rem] bg-white p-6 shadow-soft">
    <div class="flex items-center justify-between gap-4">
        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Gestion du portfolio</h2>
        <a href="{{ route('admin.portfolio.create') }}" class="rounded-full bg-jagBlue px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Nouvelle réalisation</a>
    </div>

    <div class="mt-6 space-y-3">
        @forelse ($projects as $project)
            <div class="grid gap-4 rounded-2xl border border-slate-200 p-5 lg:grid-cols-[1fr_auto]">
                <div>
                    <div class="font-semibold text-jagNavy">{{ $project->title }}</div>
                    <div class="mt-1 text-sm text-jagText">{{ $project->pole === 'pole_1' ? 'Pôle 1' : 'Pôle 2' }} — {{ $project->location }} — {{ str_replace('_', ' ', $project->status) }}</div>
                    <div class="mt-1 text-xs text-slate-500">/{{ $project->slug }}</div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <a href="{{ route('admin.portfolio.edit', $project) }}" class="rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-jagNavy">Modifier</a>
                    <form method="POST" action="{{ route('admin.portfolio.destroy', $project) }}" onsubmit="return confirm('Supprimer cette réalisation ?')">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-full bg-red-50 px-4 py-2 text-xs font-semibold text-red-700">Supprimer</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-sm text-slate-500">Aucune réalisation.</p>
        @endforelse
    </div>

    <div class="mt-6">{{ $projects->links() }}</div>
</div>
@endsection
