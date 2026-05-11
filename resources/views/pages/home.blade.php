@extends('layouts.app')

@section('title', 'Accueil | Just Agro Group')
@section('meta_description', 'Production agricole contractuelle et approvisionnement industriel sécurisé au Burkina Faso.')

@section('content')

{{-- ═══════════════════════════════════════════════════════════════
     HERO — Compact, texte original, pas de min-h-screen
═══════════════════════════════════════════════════════════════ --}}
<section class="relative overflow-hidden text-white">

    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=1920&q=85"
            alt="Champ agricole Burkina Faso"
            class="h-full w-full object-cover"
        >
        <div class="absolute inset-0" style="background-color: rgba(13,33,55,0.82);"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
        <div class="max-w-2xl">

            <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-[10px] font-heading font-bold uppercase tracking-[0.25em] text-white/80">
                Just Agro Group
            </span>

            <h1 class="mt-6 font-heading text-4xl font-extrabold leading-[1.07] sm:text-5xl lg:text-[3.25rem]">
                Produire quand le marché est sécurisé.
            </h1>

            <p class="mt-5 max-w-xl text-base leading-8 text-white/65">
                Nous structurons des projets agricoles contractuels pour investisseurs privés et industriels.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <a href="{{ route('pole-1') }}"
                   class="inline-flex items-center justify-center rounded-full bg-jagGreen px-7 py-4 text-sm font-heading font-bold uppercase tracking-[0.15em] text-white transition hover:bg-jagGreen/90">
                    Investisseur privé
                </a>
                <a href="{{ route('pole-2') }}"
                   class="inline-flex items-center justify-center rounded-full bg-jagBlue px-7 py-4 text-sm font-heading font-bold uppercase tracking-[0.15em] text-white transition hover:bg-jagBlue/90">
                    Industriel
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     APPROCHE — 3 piliers avec hover coloré
═══════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-24 sm:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="max-w-xl">
            <span class="text-[10px] font-heading font-bold uppercase tracking-[0.28em] text-jagGreen">Notre approche</span>
            <h2 class="mt-3 font-heading text-4xl font-extrabold text-jagNavy leading-tight">
                Un cadre clair. Une exécution suivie.
            </h2>
        </div>

        <div class="mt-14 grid gap-px bg-slate-100 rounded-2xl overflow-hidden lg:grid-cols-3">

            <article class="bg-white p-10 group hover:bg-jagGreen transition-colors duration-300 cursor-default">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-jagGreen/10 text-jagGreen group-hover:bg-white/20 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                </div>
                <h3 class="mt-7 font-heading text-xl font-bold text-jagNavy group-hover:text-white transition-colors">Sécuriser</h3>
                <p class="mt-3 text-sm leading-7 text-jagText group-hover:text-white/75 transition-colors">
                    Produire sur une base contractuelle, avec un débouché identifié.
                </p>
            </article>

            <article class="bg-white p-10 group hover:bg-jagBlue transition-colors duration-300 cursor-default">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-jagBlue/10 text-jagBlue group-hover:bg-white/20 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"/><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"/></svg>
                </div>
                <h3 class="mt-7 font-heading text-xl font-bold text-jagNavy group-hover:text-white transition-colors">Exécuter</h3>
                <p class="mt-3 text-sm leading-7 text-jagText group-hover:text-white/75 transition-colors">
                    Piloter les opérations agricoles avec méthode et discipline.
                </p>
            </article>

            <article class="bg-white p-10 group hover:bg-jagNavy transition-colors duration-300 cursor-default">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-slate-100 text-jagNavy group-hover:bg-white/15 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                </div>
                <h3 class="mt-7 font-heading text-xl font-bold text-jagNavy group-hover:text-white transition-colors">Suivre</h3>
                <p class="mt-3 text-sm leading-7 text-jagText group-hover:text-white/75 transition-colors">
                    Donner une lecture claire des projets, documents et rapports.
                </p>
            </article>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     PÔLES
═══════════════════════════════════════════════════════════════ --}}
<section class="bg-jagMuted py-24 sm:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between mb-16">
            <div>
                <span class="text-[10px] font-heading font-bold uppercase tracking-[0.28em] text-jagBlue">Nos pôles</span>
                <h2 class="mt-3 font-heading text-4xl font-extrabold text-jagNavy">
                    Deux parcours. Une même exigence.
                </h2>
            </div>
            <p class="max-w-sm text-sm leading-7 text-jagText">
                Chaque profil accède à une offre claire, sans mélange de discours.
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">

            {{-- Pôle 1 --}}
            <article class="relative overflow-hidden rounded-3xl bg-white group shadow-soft">
                <div class="relative h-60 overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&fit=crop&w=1200&q=80"
                        alt="Terrain agricole valorisé"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >
                    <div class="absolute top-5 left-5">
                        <span class="inline-flex items-center gap-2 rounded-full bg-jagGreen px-4 py-2 text-[10px] font-heading font-bold uppercase tracking-[0.2em] text-white">
                            <span class="block w-1.5 h-1.5 rounded-full bg-white/60"></span>
                            Pôle 1
                        </span>
                    </div>
                </div>

                <div class="p-8 lg:p-10">
                    <h3 class="font-heading text-2xl font-extrabold text-jagNavy">
                        Investisseurs privés
                    </h3>
                    <p class="mt-4 text-sm leading-7 text-jagText">
                        Nous accompagnons la valorisation de terrains agricoles avec un cadre de gestion structuré.
                    </p>

                    <div class="mt-7 space-y-3">
                        <div class="flex items-center gap-3 text-sm text-jagText">
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-jagGreen/12 text-jagGreen">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            Gestion du projet
                        </div>
                        <div class="flex items-center gap-3 text-sm text-jagText">
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-jagGreen/12 text-jagGreen">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            Reporting régulier
                        </div>
                        <div class="flex items-center gap-3 text-sm text-jagText">
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-jagGreen/12 text-jagGreen">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            Engagement pluriannuel
                        </div>
                    </div>

                    <div class="mt-10 flex items-center justify-between">
                        <a href="{{ route('pole-1') }}"
                           class="inline-flex items-center gap-3 rounded-full bg-jagGreen px-7 py-3.5 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:bg-jagGreen/90">
                            Voir le Pôle 1
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/></svg>
                        </a>
                        <span class="text-[10px] text-jagText/40 font-heading uppercase tracking-widest">Investisseurs</span>
                    </div>
                </div>
            </article>

            {{-- Pôle 2 --}}
            <article class="relative overflow-hidden rounded-3xl bg-jagNavy text-white group shadow-soft">
                <div class="relative h-60 overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1474511320723-9a56873867b5?auto=format&fit=crop&w=1200&q=80"
                        alt="Filière agricole industrielle"
                        class="h-full w-full object-cover opacity-55 transition duration-700 group-hover:scale-105 group-hover:opacity-65"
                    >
                    <div class="absolute top-5 left-5">
                        <span class="inline-flex items-center gap-2 rounded-full bg-jagBlue px-4 py-2 text-[10px] font-heading font-bold uppercase tracking-[0.2em] text-white">
                            <span class="block w-1.5 h-1.5 rounded-full bg-white/60"></span>
                            Pôle 2
                        </span>
                    </div>
                </div>

                <div class="p-8 lg:p-10">
                    <h3 class="font-heading text-2xl font-extrabold text-white">
                        Industriels & transformateurs
                    </h3>
                    <p class="mt-4 text-sm leading-7 text-white/55">
                        Nous organisons une production agricole alignée sur des besoins industriels réels.
                    </p>

                    <div class="mt-7 space-y-3">
                        <div class="flex items-center gap-3 text-sm text-white/70">
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-jagBlue/35 text-jagBlue">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            Lettre d'intention
                        </div>
                        <div class="flex items-center gap-3 text-sm text-white/70">
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-jagBlue/35 text-jagBlue">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            Volumes suivis
                        </div>
                        <div class="flex items-center gap-3 text-sm text-white/70">
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-jagBlue/35 text-jagBlue">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            Livraisons planifiées
                        </div>
                    </div>

                    <div class="mt-10 flex items-center justify-between">
                        <a href="{{ route('pole-2') }}"
                           class="inline-flex items-center gap-3 rounded-full bg-jagBlue px-7 py-3.5 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:bg-jagBlue/90">
                            Voir le Pôle 2
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/></svg>
                        </a>
                        <span class="text-[10px] text-white/30 font-heading uppercase tracking-widest">Industriels</span>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     MON ESPACE JUST
═══════════════════════════════════════════════════════════════ --}}
<section class="bg-white py-24 sm:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-16 lg:grid-cols-2 items-center">

            <div class="relative rounded-3xl bg-jagNavy overflow-hidden p-8 lg:p-10">
                <div class="absolute -top-14 -right-14 w-52 h-52 rounded-full bg-jagBlue/10 pointer-events-none"></div>
                <div class="absolute -bottom-8 -left-8 w-36 h-36 rounded-full bg-jagGreen/10 pointer-events-none"></div>

                <div class="relative flex items-center justify-between mb-8">
                    <div>
                        <span class="text-[10px] font-heading font-bold uppercase tracking-[0.25em] text-white/40">Plateforme</span>
                        <p class="mt-1 font-heading text-xl font-extrabold text-white">Mon Espace Just</p>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="block w-2 h-2 rounded-full bg-jagGreen"></span>
                        <span class="text-[10px] text-white/40 font-heading uppercase tracking-widest">Actif</span>
                    </div>
                </div>

                <div class="relative grid grid-cols-2 gap-3">
                    <div class="rounded-2xl bg-white/6 border border-white/8 p-5">
                        <svg class="w-5 h-5 text-jagGreen mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                        <p class="text-sm font-semibold text-white">Rapports</p>
                        <p class="mt-1 text-xs text-white/40">PDF & bilans</p>
                    </div>
                    <div class="rounded-2xl bg-white/6 border border-white/8 p-5">
                        <svg class="w-5 h-5 text-jagBlue mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"/></svg>
                        <p class="text-sm font-semibold text-white">Documents</p>
                        <p class="mt-1 text-xs text-white/40">Contrats & pièces</p>
                    </div>
                    <div class="rounded-2xl bg-white/6 border border-white/8 p-5">
                        <svg class="w-5 h-5 text-jagOrange mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6.75v6.75"/></svg>
                        <p class="text-sm font-semibold text-white">Suivi projet</p>
                        <p class="mt-1 text-xs text-white/40">Indicateurs clés</p>
                    </div>
                    <div class="rounded-2xl bg-jagOrange/18 border border-jagOrange/25 p-5">
                        <svg class="w-5 h-5 text-jagOrange mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z"/></svg>
                        <p class="text-sm font-semibold text-white">Accès sécurisé</p>
                        <p class="mt-1 text-xs text-white/40">Par profil</p>
                    </div>
                </div>
            </div>

            <div>
                <span class="text-[10px] font-heading font-bold uppercase tracking-[0.28em] text-jagGreen">Plateforme digitale</span>
                <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl leading-tight">
                    Les bonnes informations, au bon endroit.
                </h2>
                <p class="mt-5 text-base leading-8 text-jagText">
                    Chaque utilisateur consulte uniquement les données liées à son profil et à ses projets.
                </p>
                <ul class="mt-8 space-y-3 text-sm text-jagText">
                    <li class="flex items-center gap-3">
                        <span class="block w-1.5 h-1.5 rounded-full bg-jagGreen shrink-0"></span>
                        Accès dédié et sécurisé par profil
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="block w-1.5 h-1.5 rounded-full bg-jagGreen shrink-0"></span>
                        Documents, rapports et bilans centralisés
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="block w-1.5 h-1.5 rounded-full bg-jagGreen shrink-0"></span>
                        Just Control Live disponible en option
                    </li>
                </ul>
                <a href="{{ route('mon-espace-just') }}"
                   class="mt-10 inline-flex items-center gap-3 rounded-full bg-jagOrange px-7 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:bg-jagOrange/90">
                    Accéder à mon espace
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════
     CTA FINAL — Fond blanc, sobre
═══════════════════════════════════════════════════════════════ --}}
<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-4xl px-6 text-center lg:px-8">
        <span class="text-[10px] font-heading font-bold uppercase tracking-[0.28em] text-jagGreen">Contact</span>
        <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
            Parlons de votre besoin.
        </h2>
        <p class="mx-auto mt-4 max-w-xl text-base leading-8 text-jagText">
            Sélectionnez le parcours adapté à votre profil.
        </p>
        <div class="mt-10 flex flex-col justify-center gap-4 sm:flex-row">
            <a href="{{ route('contact.create', ['profile' => 'investisseur']) }}"
               class="inline-flex items-center justify-center rounded-full bg-jagGreen px-7 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:bg-jagGreen/90">
                Je suis investisseur
            </a>
            <a href="{{ route('contact.create', ['profile' => 'industriel']) }}"
               class="inline-flex items-center justify-center rounded-full bg-jagBlue px-7 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:bg-jagBlue/90">
                Je suis industriel
            </a>
        </div>
    </div>
</section>

@endsection