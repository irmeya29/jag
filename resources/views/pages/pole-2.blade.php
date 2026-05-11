@extends('layouts.app')

@section('title', 'Pôle 2 — Fournisseur Industriel | Just Agro Group')
@section('meta_description', 'Approvisionnement contractuel industriel : Lettre d’intention, volumes engagés, traçabilité et contrats sur 3 ans.')

@section('content')

<section class="relative overflow-hidden bg-jagNavy py-24 text-white sm:py-28">
    <svg class="absolute inset-0 h-full w-full text-white opacity-[0.07]" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="field-pattern-pole-2" width="170" height="130" patternUnits="userSpaceOnUse">
                <path d="M-50 145 C10 92, 70 55, 160 -20" fill="none" stroke="currentColor" stroke-width="1.3"/>
                <path d="M-10 150 C55 92, 110 45, 200 -18" fill="none" stroke="currentColor" stroke-width="1.3"/>
                <path d="M-80 100 C-15 65, 45 28, 135 -35" fill="none" stroke="currentColor" stroke-width="1.1"/>
                <path d="M25 118 C58 90, 85 70, 130 38" fill="none" stroke="currentColor" stroke-width="1"/>
                <circle cx="125" cy="42" r="2" fill="currentColor"/>
                <circle cx="58" cy="88" r="1.8" fill="currentColor"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#field-pattern-pole-2)" />
    </svg>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-4xl">
            <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.22em] text-white/90">
                Pôle 2 — Fournisseur Contractuel Industriel
            </span>

            <h1 class="mt-7 max-w-4xl font-heading text-4xl font-extrabold leading-[1.08] sm:text-5xl lg:text-6xl">
                Sécuriser un approvisionnement agricole fiable.
            </h1>

            <p class="mt-7 max-w-2xl text-base leading-8 text-white/85 sm:text-lg">
                Just Agro Group structure la production à partir d’un besoin industriel réel : volumes, qualité, délais et livraison.
            </p>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-14 lg:grid-cols-[0.72fr_1.28fr] lg:items-start">
            <div class="lg:sticky lg:top-28">
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">
                    Approvisionnement contractuel
                </p>

                <h2 class="mt-3 font-heading text-3xl font-extrabold leading-tight text-jagNavy sm:text-4xl">
                    Une production lancée sur besoin confirmé.
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-jagText">
                    Le principe est simple : cadrer le besoin avant de mobiliser les capacités de production.
                </p>
            </div>

            @php
                $steps = [
                    [
                        'number' => '01',
                        'icon' => 'target',
                        'title' => 'Besoin industriel',
                        'text' => 'Produit, volume, qualité attendue, calendrier et point de livraison.'
                    ],
                    [
                        'number' => '02',
                        'icon' => 'document',
                        'title' => 'Lettre d’intention',
                        'text' => 'Un cadre initial pour confirmer l’intérêt et préparer la structuration.'
                    ],
                    [
                        'number' => '03',
                        'icon' => 'leaf',
                        'title' => 'Production organisée',
                        'text' => 'Sites, producteurs, intrants, suivi terrain et contrôle qualité.'
                    ],
                    [
                        'number' => '04',
                        'icon' => 'truck',
                        'title' => 'Livraison documentée',
                        'text' => 'Volumes livrés, bons, réception, traçabilité et bilan de campagne.'
                    ],
                ];
            @endphp

            <div class="relative">
                <div class="absolute left-6 top-6 hidden h-[calc(100%-3rem)] w-px bg-slate-200 sm:block"></div>

                <div class="space-y-5">
                    @foreach ($steps as $step)
                        <article class="relative rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft transition hover:-translate-y-1 hover:shadow-xl sm:ml-12 sm:p-7">
                            <div class="absolute -left-[3.25rem] top-7 hidden h-12 w-12 items-center justify-center rounded-2xl border border-slate-200 bg-white text-jagBlue shadow-sm sm:flex">
                                <x-icon :name="$step['icon']" class="h-5 w-5" />
                            </div>

                            <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                                <div>
                                    <span class="text-[11px] font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">
                                        {{ $step['number'] }}
                                    </span>

                                    <h3 class="mt-2 font-heading text-2xl font-extrabold text-jagNavy">
                                        {{ $step['title'] }}
                                    </h3>

                                    <p class="mt-3 text-sm leading-7 text-jagText">
                                        {{ $step['text'] }}
                                    </p>
                                </div>

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-jagBlue/10 text-jagBlue sm:hidden">
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
            <div class="grid gap-0 lg:grid-cols-[0.95fr_1.05fr]">
                <div class="bg-white p-8 sm:p-10 lg:p-12">
                    <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">
                        Matières premières
                    </p>

                    <h2 class="mt-4 font-heading text-3xl font-extrabold leading-tight text-jagNavy sm:text-4xl">
                        Des cultures structurables selon le besoin.
                    </h2>

                    <p class="mt-5 text-sm leading-7 text-jagText">
                        Les productions sont organisées selon les volumes, le calendrier et les exigences du client industriel.
                    </p>
                </div>

                <div class="p-8 text-white sm:p-10 lg:p-12">
                    <div class="grid gap-3 sm:grid-cols-2">
                        @foreach (['Maïs', 'Riz', 'Soja', 'Arachide', 'Sésame', 'Tomate', 'Oignon', 'Piment'] as $crop)
                            <div class="rounded-2xl bg-white/10 px-5 py-4">
                                <span class="font-heading text-sm font-bold">
                                    {{ $crop }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="border-t border-white/10 bg-white/[0.04] px-8 py-6 sm:px-10 lg:px-12">
                <p class="text-sm leading-7 text-slate-200">
                    D’autres cultures peuvent être étudiées si le besoin industriel, les volumes et les conditions de livraison sont clairement définis.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.78fr_1.22fr] lg:items-center">
            <div>
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">
                    Cadrage industriel
                </p>

                <h2 class="mt-3 font-heading text-3xl font-extrabold leading-tight text-jagNavy sm:text-4xl">
                    Du besoin au programme d’approvisionnement.
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-jagText">
                    Cette étape transforme une demande d’achat en programme clair : produit, volumes, qualité, calendrier et conditions de livraison.
                </p>
            </div>

            <div class="relative overflow-hidden rounded-[2.25rem] bg-jagNavy p-6 text-white shadow-soft sm:p-8">
                <div class="absolute inset-0 opacity-[0.06]">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,#ffffff_1px,transparent_0)] bg-[length:24px_24px]"></div>
                </div>

                <div class="relative grid gap-5">
                    <div class="rounded-[1.5rem] bg-white p-6 text-jagNavy">
                        <p class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">
                            01 — Clarifier
                        </p>
                        <h3 class="mt-2 font-heading text-xl font-extrabold">
                            Le besoin exact
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-jagText">
                            Produit, qualité, quantité, période et site de réception.
                        </p>
                    </div>

                    <div class="rounded-[1.5rem] bg-white/10 p-6">
                        <p class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagOrange">
                            02 — Valider
                        </p>
                        <h3 class="mt-2 font-heading text-xl font-extrabold">
                            La faisabilité
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-slate-300">
                            Capacité terrain, organisation, logistique et calendrier réaliste.
                        </p>
                    </div>

                    <div class="rounded-[1.5rem] bg-white/10 p-6">
                        <p class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">
                            03 — Formaliser
                        </p>
                        <h3 class="mt-2 font-heading text-xl font-extrabold">
                            Le programme
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-slate-300">
                            Lettre d’intention, conditions principales et préparation du contrat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.82fr_1.18fr] lg:items-center">
            <div>
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">
                    Qualité & traçabilité
                </p>

                <h2 class="mt-3 font-heading text-3xl font-extrabold leading-tight text-jagNavy sm:text-4xl">
                    Une livraison ne vaut que si elle est documentée.
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-jagText">
                    Les éléments clés sont suivis et disponibles selon le programme défini avec le client.
                </p>
            </div>

            <div class="rounded-[2.25rem] border border-slate-200 bg-white p-5 shadow-soft sm:p-6">
                <div class="rounded-[1.75rem] bg-white p-6 sm:p-8">
                    <div class="mb-8 flex items-center justify-between gap-4">
                        <div>
                            <p class="text-[11px] font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">
                                Dossier de livraison
                            </p>
                            <h3 class="mt-2 font-heading text-2xl font-extrabold text-jagNavy">
                                Documents clés
                            </h3>
                        </div>

                        <span class="rounded-full bg-jagBlue/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-jagBlue">
                            Traçable
                        </span>
                    </div>

                    <div class="space-y-4">
                        @foreach ([
                            ['icon' => 'document', 'title' => 'Fiches lot'],
                            ['icon' => 'shield', 'title' => 'Contrôles qualité'],
                            ['icon' => 'truck', 'title' => 'Bons de livraison'],
                            ['icon' => 'clipboard', 'title' => 'Procès-verbaux'],
                        ] as $item)
                            <div class="flex items-center justify-between gap-4 rounded-2xl border border-slate-200 bg-white p-4">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-jagOrange/10 text-jagOrange">
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

                <div class="mt-5 rounded-[1.75rem] bg-jagNavy p-6 text-white">
                    <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">
                        Option
                    </p>

                    <h3 class="mt-3 font-heading text-2xl font-extrabold">
                        Just Control Live
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-slate-300">
                        Visualisation sécurisée du site de production selon les conditions définies avec le client.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">
            Pôle 2
        </p>

        <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
            Vous cherchez un approvisionnement structuré ?
        </h2>

        <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-jagText">
            Présentez votre besoin industriel. Just Agro Group vous orientera après qualification des volumes, délais et exigences qualité.
        </p>

        <a href="{{ route('contact.create', ['profile' => 'industriel']) }}"
           class="mt-10 inline-flex items-center justify-center rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:opacity-90">
            Sécuriser mon approvisionnement
        </a>
    </div>
</section>

@endsection