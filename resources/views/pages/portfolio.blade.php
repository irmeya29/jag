@extends('layouts.app')

@section('title', 'Realisations | Just Agro Group')
@section('meta_description', 'Realisations et projets suivis par Just Agro Group.')

@section('content')
<section class="bg-jagNavy py-16 text-white sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Realisations</p>
                <h1 class="mt-4 font-heading text-4xl font-extrabold sm:text-5xl">Projets & dossiers suivis</h1>
            </div>
            <p class="max-w-xl text-sm leading-7 text-slate-200">
                Une lecture simple des projets par pole, statut et type de prestation.
            </p>
        </div>
    </div>
</section>

<section class="bg-white py-16 sm:py-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[260px_1fr] lg:px-8">
        <aside class="lg:sticky lg:top-24 lg:self-start">
            <div class="rounded-[1.5rem] border border-slate-200 bg-jagMuted p-5">
                <h2 class="font-heading text-lg font-extrabold text-jagNavy">Filtres</h2>

                <div class="mt-5 space-y-2">
                    <a href="{{ route('portfolio.index') }}"
                       class="flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-semibold transition {{ $selectedPole ? 'bg-white text-jagNavy hover:bg-white/70' : 'bg-jagGreen text-white' }}">
                        <span>Toutes</span>
                    </a>

                    @foreach ($poles as $pole => $label)
                        <a href="{{ route('portfolio.index', ['pole' => $pole]) }}"
                           class="flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-semibold transition {{ $selectedPole === $pole ? 'bg-jagGreen text-white' : 'bg-white text-jagNavy hover:bg-white/70' }}">
                            <span>{{ $label }}</span>
                            <span>{{ $pole === 'pole_1' ? 'Investisseurs' : 'Industriels' }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </aside>

        <div>
            <div class="mb-8 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">
                        {{ $selectedPole ? $poles[$selectedPole] : 'Toutes les realisations' }}
                    </p>
                    <h2 class="mt-2 font-heading text-3xl font-extrabold text-jagNavy">
                        {{ $projects->total() }} realisation{{ $projects->total() > 1 ? 's' : '' }}
                    </h2>
                </div>

                @if ($selectedPole)
                    <a href="{{ route('portfolio.index') }}" class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagOrange">
                        Retirer le filtre
                    </a>
                @endif
            </div>

            <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                @forelse ($projects as $project)
                    <article class="overflow-hidden rounded-[1.5rem] border border-slate-200 bg-white shadow-soft">
                        <div class="h-52 bg-slate-200">
                            @if ($project->cover_image)
                                <img src="{{ asset('storage/' . $project->cover_image) }}"
                                     alt="{{ $project->title }}"
                                     class="h-full w-full object-cover">
                            @else
                                <div class="flex h-full w-full items-center justify-center bg-jagMuted text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-400">
                                    Image
                                </div>
                            @endif
                        </div>

                        <div class="p-6">
                            <div class="flex flex-wrap items-center gap-3 text-[11px] font-heading font-bold uppercase tracking-[0.16em]">
                                <span class="rounded-full bg-jagMuted px-3 py-2 text-jagNavy">
                                    {{ $project->pole === 'pole_1' ? 'Pole 1' : 'Pole 2' }}
                                </span>
                                <span class="{{ $project->status === 'en_cours' ? 'text-jagOrange' : 'text-jagGreen' }}">
                                    {{ str_replace('_', ' ', $project->status) }}
                                </span>
                            </div>

                            <h3 class="mt-5 font-heading text-xl font-bold leading-snug text-jagNavy">
                                {{ $project->title }}
                            </h3>

                            <div class="mt-4 space-y-2 text-sm text-jagText">
                                <p><span class="font-semibold text-jagNavy">Lieu :</span> {{ $project->location }}</p>
                                <p><span class="font-semibold text-jagNavy">Prestation :</span> {{ $project->service_type }}</p>
                                @if ($project->culture)
                                    <p><span class="font-semibold text-jagNavy">Culture :</span> {{ $project->culture }}</p>
                                @endif
                            </div>

                            @if ($project->summary)
                                <p class="mt-4 text-sm leading-7 text-jagText">{{ $project->summary }}</p>
                            @endif
                        </div>
                    </article>
                @empty
                    <div class="rounded-[1.5rem] border border-dashed border-slate-300 bg-jagMuted p-10 text-center text-sm text-slate-500 md:col-span-2 xl:col-span-3">
                        Aucune realisation pour ce filtre.
                    </div>
                @endforelse
            </div>

            <div class="mt-10">
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
