@extends('layouts.app')

@section('title', 'Accueil | Just Agro Group')
@section('meta_description', 'Production agricole contractuelle et approvisionnement industriel sécurisé au Burkina Faso.')

@section('content')
<section class="relative overflow-hidden text-white">
    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=1600&q=80"
            alt="Champ irrigué"
            class="h-full w-full object-cover"
        >
        <div class="absolute inset-0 bg-[linear-gradient(135deg,rgba(13,33,55,0.88),rgba(10,61,46,0.72))]"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
        <div class="grid items-center gap-12 lg:grid-cols-[0.95fr_1.05fr]">
            <div class="max-w-2xl">
                <span class="inline-flex items-center rounded-full border border-white/10 bg-white/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.22em] text-white/90 backdrop-blur">
                    Just Agro Group — Produire avec exigence
                </span>

                <h1 class="mt-7 font-heading text-4xl font-extrabold leading-[1.05] sm:text-5xl lg:text-6xl">
                    Production agricole contractuelle,
                    pensée pour le réel
                </h1>

                <p class="mt-7 max-w-xl text-base leading-8 text-slate-200 sm:text-lg">
                    Deux parcours clairs. Une exécution rigoureuse.
                    Des projets structurés pour investisseurs et industriels.
                </p>

                <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                    <a href="{{ route('pole-1') }}"
                       class="inline-flex items-center justify-center rounded-full bg-jagGreen px-7 py-4 text-sm font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:opacity-95">
                        Je suis investisseur
                    </a>

                    <a href="{{ route('pole-2') }}"
                       class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-7 py-4 text-sm font-heading font-bold uppercase tracking-[0.18em] text-white backdrop-blur transition hover:bg-white/15">
                        Je suis industriel
                    </a>
                </div>

                <div class="mt-10 flex flex-wrap gap-3">
                    <span class="rounded-full border border-white/10 bg-white/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-white/85 backdrop-blur">
                        Contractuel
                    </span>
                    <span class="rounded-full border border-white/10 bg-white/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-white/85 backdrop-blur">
                        Industriel
                    </span>
                    <span class="rounded-full border border-white/10 bg-white/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-white/85 backdrop-blur">
                        Traçable
                    </span>
                </div>
            </div>

            <div class="lg:pl-8">
                <div class="grid gap-4 lg:grid-cols-[1.1fr_0.9fr]">
                    <article class="overflow-hidden rounded-[2rem] border border-white/10 bg-white/10 backdrop-blur">
                        <div class="h-72">
                            <img
                                src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?auto=format&fit=crop&w=1200&q=80"
                                alt="Production agricole"
                                class="h-full w-full object-cover"
                            >
                        </div>
                        <div class="p-6">
                            <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-white/70">
                                Pôle 1
                            </div>
                            <h2 class="mt-3 font-heading text-2xl font-extrabold text-white">
                                Valoriser un terrain avec un cadre clair
                            </h2>
                        </div>
                    </article>

                    <div class="grid gap-4">
                        <article class="rounded-[2rem] border border-white/10 bg-white/10 p-6 backdrop-blur">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-white/65">
                                        Pôle 2
                                    </div>
                                    <h3 class="mt-3 font-heading text-xl font-extrabold text-white">
                                        Approvisionnement structuré
                                    </h3>
                                </div>
                            </div>
                        </article>

                        <article class="rounded-[2rem] border border-white/10 bg-jagOrange p-6 text-white shadow-soft">
                            <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-white/75">
                                Mon Espace Just
                            </div>
                            <h3 class="mt-3 font-heading text-xl font-extrabold">
                                Suivi digital plus lisible
                            </h3>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Notre approche</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Trois fondations simples
            </h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                    <x-icon name="shield" class="h-7 w-7" />
                </div>
                <h3 class="mt-6 font-heading text-2xl font-bold text-jagNavy">Sécurisation</h3>
            </article>

            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-jagBlue/10 text-jagBlue">
                    <x-icon name="factory" class="h-7 w-7" />
                </div>
                <h3 class="mt-6 font-heading text-2xl font-bold text-jagNavy">Industrialisation</h3>
            </article>

            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-jagOrange/10 text-jagOrange">
                    <x-icon name="chart" class="h-7 w-7" />
                </div>
                <h3 class="mt-6 font-heading text-2xl font-bold text-jagNavy">Transparence digitale</h3>
            </article>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Nos pôles</p>
                <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                    Deux besoins, deux réponses
                </h2>
            </div>

            <p class="max-w-xl text-sm leading-7 text-jagText">
                Une offre distincte pour l’investisseur. Une offre distincte pour l’industriel.
            </p>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            <article class="overflow-hidden rounded-[2rem] bg-white shadow-soft">
                <div class="h-56">
                    <img
                        src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1200&q=80"
                        alt="Investissement agricole"
                        class="h-full w-full object-cover"
                    >
                </div>
                <div class="p-8">
                    <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                        <x-icon name="leaf" class="h-7 w-7" />
                    </div>
                    <span class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">
                        Pôle 1 — Maîtrise d’Ouvrage Agricole
                    </span>
                    <h3 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">
                        Investisseurs et propriétaires de terrain
                    </h3>
                    <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                        <li>• Gestion complète du projet</li>
                        <li>• Reporting et traçabilité</li>
                        <li>• Engagement sur 4 ans</li>
                    </ul>
                    <a href="{{ route('pole-1') }}"
                       class="mt-8 inline-flex rounded-full bg-jagGreen px-6 py-3 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
                        Découvrir le Pôle 1
                    </a>
                </div>
            </article>

            <article class="overflow-hidden rounded-[2rem] bg-white shadow-soft">
                <div class="h-56">
                    <img
                        src="https://images.unsplash.com/photo-1516467508483-a7212febe31a?auto=format&fit=crop&w=1200&q=80"
                        alt="Approvisionnement industriel"
                        class="h-full w-full object-cover"
                    >
                </div>
                <div class="p-8">
                    <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-jagBlue/10 text-jagBlue">
                        <x-icon name="factory" class="h-7 w-7" />
                    </div>
                    <span class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">
                        Pôle 2 — Industriel
                    </span>
                    <h3 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">
                        Industries et transformateurs
                    </h3>
                    <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                        <li>• Production adossée à une Lettre d’intention (LOI)</li>
                        <li>• Contrats fermes sur 3 ans</li>
                        <li>• Volumes et livraisons suivis</li>
                    </ul>
                    <a href="{{ route('pole-2') }}"
                       class="mt-8 inline-flex rounded-full bg-jagBlue px-6 py-3 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
                        Découvrir le Pôle 2
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[0.95fr_1.05fr] lg:px-8">
        <div class="rounded-[2rem] bg-jagMuted p-8 shadow-soft">
            <div class="rounded-[1.75rem] bg-jagNavy p-8 text-white">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-white">
                            <x-icon name="document" class="h-7 w-7" />
                        </div>
                        <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-white/70">
                            Mon Espace Just
                        </div>
                        <h3 class="mt-3 font-heading text-2xl font-extrabold">
                            Un espace plus lisible
                        </h3>
                    </div>

                </div>

                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl bg-white/5 p-4">
                        <div class="text-sm font-semibold">Rapports</div>
                        <div class="mt-2 text-xs text-white/70">PDF et bilans</div>
                    </div>
                    <div class="rounded-2xl bg-white/5 p-4">
                        <div class="text-sm font-semibold">Suivi</div>
                        <div class="mt-2 text-xs text-white/70">Informations utiles</div>
                    </div>
                    <div class="rounded-2xl bg-white/5 p-4">
                        <div class="text-sm font-semibold">Documents</div>
                        <div class="mt-2 text-xs text-white/70">Contrats et pièces</div>
                    </div>
                    <div class="rounded-2xl bg-white/5 p-4">
                        <div class="text-sm font-semibold">Accès</div>
                        <div class="mt-2 text-xs text-white/70">Par profil</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-center">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Plateforme digitale</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                L’information utile, au bon endroit
            </h2>

            <p class="mt-6 text-base leading-8 text-jagText">
                Mon Espace Just rassemble les éléments utiles dans un seul espace pour mieux suivre un projet.
            </p>

            <ul class="mt-8 space-y-4 text-sm leading-7 text-jagText">
                <li>• Accès dédié et sécurisé</li>
                <li>• Vue adaptée au profil</li>
                <li>• Documents centralisés</li>
                <li>• Meilleure lisibilité</li>
                <li>• Just Control Live en option</li>
            </ul>

            <a href="{{ route('mon-espace-just') }}"
               class="mt-10 inline-flex w-fit rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
                Accéder à Mon Espace Just
            </a>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-8">
        <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
            Parlons de votre besoin
        </h2>
        <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-jagText">
            Choisissez le parcours adapté à votre projet.
        </p>

        <div class="mt-10 flex flex-col justify-center gap-4 sm:flex-row">
            <a href="{{ route('contact.create', ['profile' => 'investisseur']) }}"
               class="inline-flex items-center justify-center rounded-full bg-jagGreen px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
                Je suis un investisseur privé
            </a>

            <a href="{{ route('contact.create', ['profile' => 'industriel']) }}"
               class="inline-flex items-center justify-center rounded-full bg-jagBlue px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
                Je suis un industriel ou transformateur
            </a>
        </div>
    </div>
</section>
@endsection
