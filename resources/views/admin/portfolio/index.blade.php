@extends('layouts.dashboard')

@section('title', 'Realisations | Just Agro Group')
@section('heading', 'Realisations')

@section('content')
<div class="rounded-[2rem] bg-white p-6 shadow-soft">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Gestion des realisations</h2>
            <p class="mt-2 text-sm text-jagText">Mettez en avant les projets visibles dans le portfolio.</p>
        </div>
        <a href="{{ route('admin.portfolio.create') }}" class="inline-flex justify-center rounded-full bg-jagBlue px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Nouvelle realisation</a>
    </div>

    <div class="mt-6 space-y-3">
        @forelse ($projects as $project)
            <div class="grid gap-4 rounded-2xl border border-slate-200 p-4 lg:grid-cols-[120px_1fr_auto] lg:items-center">
                <div class="h-24 overflow-hidden rounded-2xl bg-slate-100">
                    @if ($project->cover_image)
                        <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}" class="h-full w-full object-cover">
                    @else
                        <div class="flex h-full w-full items-center justify-center text-xs font-semibold uppercase tracking-[0.14em] text-slate-400">Image</div>
                    @endif
                </div>
                <div>
                    <div class="font-semibold text-jagNavy">{{ $project->title }}</div>
                    <div class="mt-1 text-sm text-jagText">{{ $project->pole === 'pole_1' ? 'Pole 1' : 'Pole 2' }} - {{ $project->location }} - {{ str_replace('_', ' ', $project->status) }}</div>
                    <div class="mt-1 text-xs text-slate-500">/{{ $project->slug }}</div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <a href="{{ route('admin.portfolio.edit', $project) }}" class="rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-jagNavy">Modifier</a>
                    <form method="POST" action="{{ route('admin.portfolio.destroy', $project) }}" onsubmit="return confirm('Supprimer cette realisation ?')">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-full bg-red-50 px-4 py-2 text-xs font-semibold text-red-700">Supprimer</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-sm text-slate-500">Aucune realisation.</p>
        @endforelse
    </div>

    <div class="mt-6">{{ $projects->links() }}</div>
</div>
@endsection
