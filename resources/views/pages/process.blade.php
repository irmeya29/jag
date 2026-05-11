@extends('layouts.app')

@section('title', 'Notre processus d’intervention | Just Agro Group')
@section('meta_description', 'Découvrez le processus d’intervention de Just Agro Group : cadrage, faisabilité, structuration et suivi des projets agricoles.')

@section('content')

<section class="relative overflow-hidden bg-jagNavy py-24 text-white sm:py-32">
    <div class="absolute inset-0 opacity-[0.08]">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,#ffffff_1px,transparent_0)] bg-[length:28px_28px]"></div>
    </div>

    <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-jagGreen/20 blur-3xl"></div>
    <div class="absolute -bottom-40 left-0 h-96 w-96 rounded-full bg-jagBlue/20 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-4xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.22em] text-jagOrange">
                Notre processus
            </p>

            <h1 class="mt-5 max-w-4xl font-heading text-4xl font-extrabold leading-[1.08] sm:text-5xl lg:text-6xl">
                Une méthode claire avant chaque engagement.
            </h1>

            <p class="mt-7 max-w-2xl text-base leading-8 text-slate-200 sm:text-lg">
                Just Agro Group analyse chaque besoin, vérifie sa faisabilité et définit un cadre d’intervention avant toute mise en production.
            </p>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.22em] text-jagBlue">
                Méthode d’intervention
            </p>

            <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Quatre étapes essentielles.
            </h2>

            <p class="mt-5 max-w-2xl text-sm leading-7 text-jagText">
                Une démarche simple pour éviter les engagements flous et les productions mal cadrées.
            </p>
        </div>

        @php
            $steps = [
                [
                    'number' => '01',
                    'icon' => 'target',
                    'title' => 'Cadrer',
                    'text' => 'Comprendre le besoin, le profil, les objectifs et les contraintes principales.'
                ],
                [
                    'number' => '02',
                    'icon' => 'map',
                    'title' => 'Vérifier',
                    'text' => 'Analyser la faisabilité technique, agricole, foncière ou logistique.'
                ],
                [
                    'number' => '03',
                    'icon' => 'clipboard',
                    'title' => 'Structurer',
                    'text' => 'Définir le cadre d’intervention, les responsabilités et les livrables.'
                ],
                [
                    'number' => '04',
                    'icon' => 'chart',
                    'title' => 'Suivre',
                    'text' => 'Piloter l’exécution, documenter les étapes clés et produire un bilan.'
                ],
            ];
        @endphp

        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($steps as $step)
                <article class="rounded-[1.75rem] border border-slate-200 bg-white p-7 shadow-soft transition hover:-translate-y-1 hover:shadow-xl">
                    <div class="flex items-center justify-between gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                            <x-icon :name="$step['icon']" class="h-6 w-6" />
                        </div>

                        <span class="font-heading text-3xl font-extrabold text-jagNavy/10">
                            {{ $step['number'] }}
                        </span>
                    </div>

                    <h3 class="mt-8 font-heading text-2xl font-extrabold text-jagNavy">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-jagText">
                        {{ $step['text'] }}
                    </p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
            <div>
                <p class="text-xs font-heading font-bold uppercase tracking-[0.22em] text-jagOrange">
                    Notre principe
                </p>

                <h2 class="mt-4 font-heading text-3xl font-extrabold leading-tight text-jagNavy sm:text-4xl">
                    Aucun projet n’avance sans base vérifiée.
                </h2>
            </div>

            <div class="grid gap-4 sm:grid-cols-3">
                <div class="rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-jagGreen/10 text-jagGreen">
                        <x-icon name="target" class="h-5 w-5" />
                    </div>
                    <h3 class="font-heading text-lg font-bold text-jagNavy">
                        Besoin identifié
                    </h3>
                </div>

                <div class="rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-jagBlue/10 text-jagBlue">
                        <x-icon name="shield" class="h-5 w-5" />
                    </div>
                    <h3 class="font-heading text-lg font-bold text-jagNavy">
                        Faisabilité validée
                    </h3>
                </div>

                <div class="rounded-[1.5rem] border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-jagOrange/10 text-jagOrange">
                        <x-icon name="document" class="h-5 w-5" />
                    </div>
                    <h3 class="font-heading text-lg font-bold text-jagNavy">
                        Suivi documenté
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="rounded-[2rem] bg-white p-8 shadow-soft sm:p-10 lg:p-12">
            <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
                <div>
                    <p class="text-xs font-heading font-bold uppercase tracking-[0.22em] text-jagGreen">
                        Exécution
                    </p>

                    <h2 class="mt-4 font-heading text-3xl font-extrabold leading-tight text-jagNavy sm:text-4xl">
                        Un processus utile seulement s’il reste lisible.
                    </h2>
                </div>

                <div class="space-y-5">
                    <div class="border-l-4 border-jagGreen pl-5">
                        <h3 class="font-heading text-lg font-bold text-jagNavy">
                            Avant
                        </h3>
                        <p class="mt-2 text-sm leading-7 text-jagText">
                            Le besoin est qualifié et les conditions de départ sont clarifiées.
                        </p>
                    </div>

                    <div class="border-l-4 border-jagBlue pl-5">
                        <h3 class="font-heading text-lg font-bold text-jagNavy">
                            Pendant
                        </h3>
                        <p class="mt-2 text-sm leading-7 text-jagText">
                            Les opérations sont suivies avec des points de contrôle définis.
                        </p>
                    </div>

                    <div class="border-l-4 border-jagOrange pl-5">
                        <h3 class="font-heading text-lg font-bold text-jagNavy">
                            Après
                        </h3>
                        <p class="mt-2 text-sm leading-7 text-jagText">
                            Les résultats sont consolidés dans un bilan exploitable.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft sm:p-10 lg:p-12">
            <div class="grid gap-8 lg:grid-cols-[1fr_auto] lg:items-center">
                <div>
                    <p class="text-xs font-heading font-bold uppercase tracking-[0.22em] text-jagOrange">
                        Passer à l’action
                    </p>

                    <h2 class="mt-4 max-w-3xl font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                        Parlons de votre projet.
                    </h2>

                    <p class="mt-5 max-w-2xl text-sm leading-7 text-jagText">
                        Sélectionnez le parcours adapté à votre profil. L’équipe vous orientera après qualification du besoin.
                    </p>
                </div>

                <div class="flex flex-col gap-4 sm:flex-row lg:flex-col xl:flex-row">
                    <a href="{{ route('contact.create', ['profile' => 'investisseur']) }}"
                       class="inline-flex items-center justify-center rounded-full bg-jagGreen px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:opacity-90">
                        Investisseur
                    </a>

                    <a href="{{ route('contact.create', ['profile' => 'industriel']) }}"
                       class="inline-flex items-center justify-center rounded-full bg-jagBlue px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:opacity-90">
                        Industriel
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection