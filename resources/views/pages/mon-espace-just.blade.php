@extends('layouts.app')

@section('title', 'Mon Espace Just | Just Agro Group')
@section('meta_description', 'Accédez à Mon Espace Just, la plateforme digitale sécurisée de Just Agro Group.')

@section('content')
<section class="relative overflow-hidden bg-jagNavy text-white">
    <div class="absolute inset-0 bg-[linear-gradient(135deg,rgba(13,33,55,0.97),rgba(10,61,46,0.90))]"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
        <div class="grid items-center gap-12 lg:grid-cols-[0.92fr_1.08fr]">
            <div class="max-w-2xl">
                <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.22em] text-white/85">
                    Mon Espace Just
                </span>

                <h1 class="mt-7 font-heading text-4xl font-extrabold leading-[1.08] sm:text-5xl">
                    Un espace client sécurisé pour suivre l’essentiel
                </h1>

                <p class="mt-7 text-base leading-8 text-slate-200">
                    Rapports, documents et informations clés, réunis dans un espace clair et structuré.
                </p>

                <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                    <a href="{{ route('login') }}"
                       class="inline-flex items-center justify-center rounded-full bg-jagOrange px-7 py-4 text-sm font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:opacity-95">
                        Se connecter
                    </a>

                    <a href="{{ route('contact.create') }}"
                       class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-7 py-4 text-sm font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:bg-white/10">
                        Demander un accès
                    </a>
                </div>

                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                        <div class="text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-white/60">Accès</div>
                        <div class="mt-2 text-sm font-semibold text-white">Sécurisé</div>
                    </div>

                    <div class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                        <div class="text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-white/60">Lecture</div>
                        <div class="mt-2 text-sm font-semibold text-white">Par profil</div>
                    </div>

                    <div class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                        <div class="text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-white/60">Valeur</div>
                        <div class="mt-2 text-sm font-semibold text-white">Clarté</div>
                    </div>
                </div>
            </div>

            <div class="lg:pl-6">
                <div class="rounded-[2rem] border border-white/10 bg-white/8 p-6 shadow-soft backdrop-blur">
                    <div class="rounded-[1.5rem] bg-white p-6 text-jagNavy">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">
                                    Vue d’ensemble
                                </div>
                                <h2 class="mt-3 font-heading text-2xl font-extrabold">
                                    Une interface simple et lisible
                                </h2>
                            </div>

                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-jagMuted">
                                <svg class="h-7 w-7 text-jagBlue" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path d="M4 19h16" stroke-linecap="round"/>
                                    <path d="M7 16V9" stroke-linecap="round"/>
                                    <path d="M12 16V5" stroke-linecap="round"/>
                                    <path d="M17 16v-3" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <div class="text-sm font-semibold text-jagNavy">Dashboard</div>
                                <div class="mt-2 text-xs text-slate-500">Vue synthétique</div>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <div class="text-sm font-semibold text-jagNavy">Rapports</div>
                                <div class="mt-2 text-xs text-slate-500">Bilans et PDF</div>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <div class="text-sm font-semibold text-jagNavy">Documents</div>
                                <div class="mt-2 text-xs text-slate-500">Contrats et pièces</div>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <div class="text-sm font-semibold text-jagNavy">Suivi</div>
                                <div class="mt-2 text-xs text-slate-500">Informations à jour</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 grid gap-4 sm:grid-cols-3">
                        <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5 text-white">
                            <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-white/60">Client</div>
                            <div class="mt-3 text-lg font-heading font-extrabold">Investisseur</div>
                        </div>

                        <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5 text-white">
                            <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-white/60">Client</div>
                            <div class="mt-3 text-lg font-heading font-extrabold">Industriel</div>
                        </div>

                        <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5 text-white">
                            <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-white/60">Objectif</div>
                            <div class="mt-3 text-lg font-heading font-extrabold">Suivi clair</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Pourquoi cette plateforme</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Une information mieux présentée
            </h2>
            <p class="mt-4 text-base leading-8 text-jagText">
                Mon Espace Just rassemble les éléments utiles dans un seul espace pour simplifier la consultation et améliorer la visibilité.
            </p>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-jagMuted">
                    <svg class="h-8 w-8 text-jagGreen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 3l7 3v5c0 5-3.5 8.5-7 10-3.5-1.5-7-5-7-10V6l7-3Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="m9.5 12 1.7 1.7L14.8 10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3 class="mt-6 font-heading text-2xl font-bold text-jagNavy">Accès sécurisé</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Une connexion dédiée protège les informations et limite l’accès au bon périmètre.
                </p>
            </article>

            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-jagMuted">
                    <svg class="h-8 w-8 text-jagBlue" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M4 19h16" stroke-linecap="round"/>
                        <path d="M7 16V9" stroke-linecap="round"/>
                        <path d="M12 16V5" stroke-linecap="round"/>
                        <path d="M17 16v-3" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3 class="mt-6 font-heading text-2xl font-bold text-jagNavy">Lecture projet</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Les rapports, états et documents sont organisés pour être consultés plus rapidement.
                </p>
            </article>

            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-jagMuted">
                    <svg class="h-8 w-8 text-jagOrange" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M7 8h10M7 12h10M7 16h6" stroke-linecap="round"/>
                        <path d="M5 4h14a1 1 0 0 1 1 1v14l-4-3H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1Z" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3 class="mt-6 font-heading text-2xl font-bold text-jagNavy">Documents centralisés</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Contrats, rapports et pièces utiles sont réunis dans un cadre cohérent.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Deux espaces clients</p>
                <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                    Une lecture adaptée à votre besoin
                </h2>
            </div>

            <p class="max-w-xl text-sm leading-7 text-jagText">
                Chaque client consulte uniquement les informations utiles à son profil.
            </p>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            <article class="rounded-[2rem] border border-jagGreen/10 bg-white p-8 shadow-soft">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">Espace investisseur</div>
                        <h3 class="mt-3 font-heading text-2xl font-extrabold text-jagNavy">
                            Une vue claire de votre projet agricole
                        </h3>
                    </div>

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-jagMuted">
                        <svg class="h-7 w-7 text-jagGreen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M3 21h18" stroke-linecap="round"/>
                            <path d="M7 21V10l5-4 5 4v11" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10 21v-5h4v5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                    <li>• Vue d’ensemble du projet</li>
                    <li>• Rapports et documents</li>
                    <li>• Suivi des opérations</li>
                    <li>• Lecture du cycle en cours</li>
                </ul>
            </article>

            <article class="rounded-[2rem] border border-jagBlue/10 bg-white p-8 shadow-soft">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">Espace industriel</div>
                        <h3 class="mt-3 font-heading text-2xl font-extrabold text-jagNavy">
                            Une meilleure visibilité sur vos engagements
                        </h3>
                    </div>

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-jagMuted">
                        <svg class="h-7 w-7 text-jagBlue" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M4 21h16" stroke-linecap="round"/>
                            <path d="M6 21V8l6-3 6 3v13" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 12h.01M9 15h.01M12 12h.01M12 15h.01M15 12h.01M15 15h.01" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                    <li>• Suivi des LOI et contrats</li>
                    <li>• Calendrier de livraison</li>
                    <li>• Certificats et pièces qualité</li>
                    <li>• Lecture des volumes et états</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="flex flex-col justify-center">
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Parcours</p>
                <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                    Une consultation simple
                </h2>
                <p class="mt-6 text-base leading-8 text-jagText">
                    L’entrée est directe : se connecter, retrouver ses éléments et consulter l’essentiel sans friction.
                </p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">Étape 01</div>
                    <h3 class="mt-3 font-heading text-xl font-bold text-jagNavy">Connexion</h3>
                    <p class="mt-3 text-sm leading-7 text-jagText">Accès dédié avec identifiants sécurisés.</p>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">Étape 02</div>
                    <h3 class="mt-3 font-heading text-xl font-bold text-jagNavy">Orientation</h3>
                    <p class="mt-3 text-sm leading-7 text-jagText">Affichage des modules utiles selon le profil.</p>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagOrange">Étape 03</div>
                    <h3 class="mt-3 font-heading text-xl font-bold text-jagNavy">Consultation</h3>
                    <p class="mt-3 text-sm leading-7 text-jagText">Rapports, pièces et informations utiles.</p>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="text-[11px] font-heading font-bold uppercase tracking-[0.18em] text-jagNavy">Étape 04</div>
                    <h3 class="mt-3 font-heading text-xl font-bold text-jagNavy">Suivi</h3>
                    <p class="mt-3 text-sm leading-7 text-jagText">Lecture régulière du projet et de ses éléments clés.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Passage à l’action</p>
        <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
            Accédez à votre espace ou demandez une ouverture
        </h2>
        <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-jagText">
            La plateforme est réservée aux utilisateurs autorisés.
        </p>

        <div class="mt-10 flex flex-col justify-center gap-4 sm:flex-row">
            <a href="{{ route('login') }}"
               class="inline-flex items-center justify-center rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
                Se connecter
            </a>

            <a href="{{ route('contact.create') }}"
               class="inline-flex items-center justify-center rounded-full bg-jagBlue px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
                Demander un accès
            </a>
        </div>
    </div>
</section>
@endsection