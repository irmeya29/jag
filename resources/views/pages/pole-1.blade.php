@extends('layouts.app')

@section('title', 'Pôle 1 — Maîtrise d’Ouvrage Agricole | Just Agro Group')
@section('meta_description', 'Gestion de projets agricoles pour investisseurs privés et diaspora : suivi, reporting, traçabilité et engagement sur 4 ans.')

@section('content')

<section class="relative overflow-hidden bg-jagForest py-24 text-white sm:py-28">
    <svg class="absolute inset-0 h-full w-full text-white opacity-[0.08]" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="field-pattern-pole-1" width="160" height="120" patternUnits="userSpaceOnUse">
                <path d="M-40 130 C20 80, 60 45, 150 -20" fill="none" stroke="currentColor" stroke-width="1.4"/>
                <path d="M0 145 C55 90, 90 55, 185 -10" fill="none" stroke="currentColor" stroke-width="1.4"/>
                <path d="M-70 90 C-10 55, 35 25, 125 -40" fill="none" stroke="currentColor" stroke-width="1.2"/>
                <circle cx="118" cy="38" r="2" fill="currentColor"/>
                <circle cx="55" cy="84" r="1.8" fill="currentColor"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#field-pattern-pole-1)" />
    </svg>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-4xl">
            <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.22em] text-white/90">
                Pôle 1 — Maîtrise d’Ouvrage Agricole
            </span>

            <h1 class="mt-7 max-w-4xl font-heading text-4xl font-extrabold leading-[1.08] sm:text-5xl lg:text-6xl">
                Valoriser un terrain avec un cadre clair.
            </h1>

            <p class="mt-7 max-w-2xl text-base leading-8 text-white/85 sm:text-lg">
                Just Agro Group structure, pilote et suit votre projet agricole avec méthode, transparence et reporting.
            </p>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-14 lg:grid-cols-[0.72fr_1.28fr] lg:items-start">
            <div class="lg:sticky lg:top-28">
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">
                    Accompagnement
                </p>

                <h2 class="mt-3 font-heading text-3xl font-extrabold leading-tight text-jagNavy sm:text-4xl">
                    Du terrain au bilan de cycle.
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-jagText">
                    Une démarche simple : diagnostiquer, planifier, produire et rendre compte.
                </p>
            </div>

            @php
                $steps = [
                    [
                        'number' => '01',
                        'icon' => 'map',
                        'title' => 'Diagnostic',
                        'text' => 'Analyse du terrain, de l’eau et du potentiel agricole.'
                    ],
                    [
                        'number' => '02',
                        'icon' => 'clipboard',
                        'title' => 'Planification',
                        'text' => 'Choix des cultures, calendrier, budget et organisation.'
                    ],
                    [
                        'number' => '03',
                        'icon' => 'leaf',
                        'title' => 'Production',
                        'text' => 'Mise en place, intrants, supervision et suivi terrain.'
                    ],
                    [
                        'number' => '04',
                        'icon' => 'chart',
                        'title' => 'Reporting',
                        'text' => 'Rapports, photos, coûts et bilan de cycle.'
                    ],
                ];
            @endphp

            <div class="relative">
                <div class="absolute left-6 top-6 hidden h-[calc(100%-3rem)] w-px bg-slate-200 sm:block"></div>

                <div class="space-y-5">
                    @foreach ($steps as $step)
                        <article class="relative rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft transition hover:-translate-y-1 hover:shadow-xl sm:ml-12 sm:p-7">
                            <div class="absolute -left-[3.25rem] top-7 hidden h-12 w-12 items-center justify-center rounded-2xl border border-slate-200 bg-white text-jagGreen shadow-sm sm:flex">
                                <x-icon :name="$step['icon']" class="h-5 w-5" />
                            </div>

                            <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                                <div>
                                    <span class="text-[11px] font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">
                                        {{ $step['number'] }}
                                    </span>

                                    <h3 class="mt-2 font-heading text-2xl font-extrabold text-jagNavy">
                                        {{ $step['title'] }}
                                    </h3>

                                    <p class="mt-3 text-sm leading-7 text-jagText">
                                        {{ $step['text'] }}
                                    </p>
                                </div>

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen sm:hidden">
                                    <x-icon :name="$step['icon']" class="h-5 w-5" />
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="overflow-hidden rounded-[2.25rem] bg-jagNavy shadow-soft">
            <div class="grid lg:grid-cols-2">
                <article class="bg-white p-8 sm:p-10 lg:p-12">
                    <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">
                        Client
                    </p>

                    <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">
                        Vous financez.
                    </h2>

                    <p class="mt-5 text-sm leading-7 text-jagText">
                        Terrain, installation, intrants, eau, main-d’œuvre et charges d’exploitation validées.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        @foreach (['Terrain', 'Intrants', 'Installation', 'Exploitation'] as $item)
                            <span class="rounded-full bg-jagMuted px-4 py-2 text-xs font-heading font-bold uppercase tracking-[0.14em] text-jagText">
                                {{ $item }}
                            </span>
                        @endforeach
                    </div>
                </article>

                <article class="p-8 text-white sm:p-10 lg:p-12">
                    <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">
                        Just Agro Group
                    </p>

                    <h2 class="mt-4 font-heading text-3xl font-extrabold">
                        Nous pilotons.
                    </h2>

                    <p class="mt-5 text-sm leading-7 text-slate-300">
                        Structuration technique, organisation terrain, supervision, contrôle et reporting.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        @foreach (['Plan', 'Terrain', 'Contrôle', 'Reporting'] as $item)
                            <span class="rounded-full bg-white/10 px-4 py-2 text-xs font-heading font-bold uppercase tracking-[0.14em] text-white">
                                {{ $item }}
                            </span>
                        @endforeach
                    </div>
                </article>
            </div>

            <div class="border-t border-white/10 bg-white/[0.04] px-8 py-6 sm:px-10 lg:px-12">
                <p class="text-sm leading-7 text-slate-200">
                    <span class="font-semibold text-white">Rémunération :</span>
                    25 % du bénéfice net pour la gestion-production, ou 35 % avec accompagnement commercial.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.82fr_1.18fr] lg:items-center">
            <div>
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">
                    Suivi
                </p>

                <h2 class="mt-3 font-heading text-3xl font-extrabold leading-tight text-jagNavy sm:text-4xl">
                    Un suivi clair, accessible et utile.
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-jagText">
                    Le client garde une vision lisible de l’avancement du projet.
                </p>

                <div class="mt-8 rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-sm">
                    <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">
                        Option
                    </p>

                    <h3 class="mt-3 font-heading text-2xl font-extrabold text-jagNavy">
                        Just Control Live
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-jagText">
                        Suivi visuel sécurisé du site de production, selon les conditions définies avec le client.
                    </p>
                </div>
            </div>

            <div class="rounded-[2.25rem] border border-slate-200 bg-jagMuted p-5 shadow-soft sm:p-6">
                <div class="rounded-[1.75rem] bg-white p-6 sm:p-8">
                    <div class="mb-8 flex items-center justify-between gap-4">
                        <div>
                            <p class="text-[11px] font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">
                                Mon Espace Just
                            </p>
                            <h3 class="mt-2 font-heading text-2xl font-extrabold text-jagNavy">
                                Suivi du projet
                            </h3>
                        </div>

                        <span class="rounded-full bg-jagGreen/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-jagGreen">
                            Actif
                        </span>
                    </div>

                    <div class="space-y-4">
                        @foreach ([
                            ['icon' => 'document', 'title' => 'Rapports mensuels'],
                            ['icon' => 'map', 'title' => 'Photos terrain'],
                            ['icon' => 'chart', 'title' => 'Suivi des coûts'],
                            ['icon' => 'clipboard', 'title' => 'Bilan de cycle'],
                        ] as $item)
                            <div class="flex items-center justify-between gap-4 rounded-2xl border border-slate-200 bg-white p-4">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-jagBlue/10 text-jagBlue">
                                        <x-icon :name="$item['icon']" class="h-5 w-5" />
                                    </div>

                                    <h4 class="font-heading text-sm font-bold text-jagNavy">
                                        {{ $item['title'] }}
                                    </h4>
                                </div>

                                <div class="h-2 w-2 rounded-full bg-jagGreen"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">
            Pôle 1
        </p>

        <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
            Vous avez un terrain à valoriser ?
        </h2>

        <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-jagText">
            Présentez votre projet. Just Agro Group vous orientera après qualification du terrain.
        </p>

        <a href="{{ route('contact.create', ['profile' => 'investisseur']) }}"
           class="mt-10 inline-flex items-center justify-center rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:opacity-90">
            Demander une évaluation
        </a>
    </div>
</section>

@endsection