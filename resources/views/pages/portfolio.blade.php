@extends('layouts.app')

@section('title', 'Réalisations | Just Agro Group')
@section('meta_description', 'Découvrez les réalisations et projets suivis par Just Agro Group.')

@section('content')
<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Réalisations</p>
        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold sm:text-5xl">
            Des projets présentés avec clarté, sobriété et crédibilité
        </h1>
        <p class="mt-6 max-w-3xl text-base leading-8 text-slate-200">
            Just Agro Group structure des projets agricoles et des approvisionnements contractuels avec une logique d’exécution, de traçabilité et de documentation.
            Cette page présente quelques exemples de dossiers, études, accompagnements et cadres contractuels développés par l’équipe.
        </p>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-2">
            <article class="rounded-[2rem] bg-white p-8 shadow-soft">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                    <x-icon name="leaf" class="h-7 w-7" />
                </div>
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Réalisations — Investisseurs privés / Pôle 1</p>
                <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">Maîtrise d’Ouvrage Agricole</h2>
                <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                    @foreach (['Plans d’exploitation', 'Diagnostics agronomiques', 'Projets de mise en valeur', 'Suivis de campagne', 'Dispositifs de reporting', 'Cadres contractuels'] as $item)
                        <li>• {{ $item }}</li>
                    @endforeach
                </ul>
            </article>

            <article class="rounded-[2rem] bg-white p-8 shadow-soft">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-jagBlue/10 text-jagBlue">
                    <x-icon name="factory" class="h-7 w-7" />
                </div>
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Réalisations — Industriels / Pôle 2</p>
                <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">Approvisionnement contractuel</h2>
                <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                    @foreach (['Demandes ou cadrages Lettre d’intention (LOI)', 'Propositions d’approvisionnement', 'Schémas de production contractuelle', 'Documents de livraison', 'Cadres qualité / traçabilité', 'Études de sécurisation d’approvisionnement'] as $item)
                        <li>• {{ $item }}</li>
                    @endforeach
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Portfolio</p>
                <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                    Projets en cours et terminés
                </h2>
            </div>
            <p class="max-w-xl text-sm leading-7 text-jagText">
                Présentation paginée, avec état vide propre et lecture structurée par projet.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @forelse ($projects as $project)
                <article class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-soft">
                    <div class="h-56 bg-slate-200">
                        @if ($project->cover_image)
                            <img src="{{ asset('storage/' . $project->cover_image) }}"
                                 alt="{{ $project->title }}"
                                 class="h-full w-full object-cover">
                        @endif
                    </div>

                    <div class="p-6">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl {{ $project->pole === 'pole_1' ? 'bg-jagGreen/10 text-jagGreen' : 'bg-jagBlue/10 text-jagBlue' }}">
                            <x-icon :name="$project->pole === 'pole_1' ? 'leaf' : 'factory'" class="h-6 w-6" />
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <span class="rounded-full bg-jagMuted px-3 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-jagNavy">
                                {{ $project->pole === 'pole_1' ? 'Pôle 1' : 'Pôle 2' }}
                            </span>

                            <span class="text-[11px] font-heading font-bold uppercase tracking-[0.16em] {{ $project->status === 'en_cours' ? 'text-jagOrange' : 'text-jagGreen' }}">
                                {{ str_replace('_', ' ', $project->status) }}
                            </span>
                        </div>

                        <h3 class="mt-5 font-heading text-2xl font-bold text-jagNavy">
                            {{ $project->title }}
                        </h3>

                        <div class="mt-4 space-y-2 text-sm text-jagText">
                            <p><span class="font-semibold text-jagNavy">Localisation :</span> {{ $project->location }}</p>
                            <p><span class="font-semibold text-jagNavy">Culture :</span> {{ $project->culture ?: 'À préciser' }}</p>
                            <p>
                                <span class="font-semibold text-jagNavy">Superficie :</span>
                                {{ $project->surface_hectare ? number_format($project->surface_hectare, 2, ',', ' ') . ' ha' : 'N/A' }}
                            </p>
                            <p><span class="font-semibold text-jagNavy">Prestation :</span> {{ $project->service_type }}</p>
                        </div>

                        @if ($project->summary)
                            <p class="mt-4 text-sm leading-7 text-jagText">{{ $project->summary }}</p>
                        @endif
                    </div>
                </article>
            @empty
                <div class="col-span-full rounded-[2rem] border border-dashed border-slate-300 bg-jagMuted p-10 text-center text-sm text-slate-500">
                    Aucun projet n’est encore publié.
                </div>
            @endforelse
        </div>

        <div class="mt-10">
            {{ $projects->links() }}
        </div>
    </div>
</section>

<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[0.95fr_1.05fr] lg:px-8">
        <div>
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Zones d’intervention</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold sm:text-4xl">
                Une lecture géographique des projets
            </h2>
            <p class="mt-6 text-base leading-8 text-slate-200">
                Cette zone pourra accueillir plus tard une carte des zones d’intervention pour renforcer la
                lisibilité du périmètre d’action de Just Agro Group.
            </p>
        </div>

        <div class="rounded-[2rem] bg-white/10 p-8 backdrop-blur">
            <div class="flex min-h-[320px] items-center justify-center rounded-3xl border border-dashed border-white/20 text-center text-sm text-slate-300">
                Carte / visuel des zones d’intervention à intégrer
            </div>
        </div>
    </div>
</section>
@endsection
