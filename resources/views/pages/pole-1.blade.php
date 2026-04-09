@extends('layouts.app')

@section('title', 'Pôle 1 — Maîtrise d’Ouvrage Agricole | Just Agro Group')
@section('meta_description', 'Gestion de projets agricoles pour investisseurs privés et diaspora : suivi, reporting, traçabilité et engagement sur 4 ans.')

@section('content')
<section class="bg-[linear-gradient(135deg,#0A3D2E,#2EAA63)] py-20 text-white sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.22em]">
            Pôle 1 — Maîtrise d’Ouvrage Agricole
        </span>

        <h1 class="mt-6 max-w-4xl font-heading text-4xl font-extrabold sm:text-5xl">
            Valoriser un terrain avec un cadre opérationnel clair, suivi et traçable
        </h1>

        <p class="mt-6 max-w-3xl text-base leading-8 text-white/85">
            Destiné aux investisseurs privés, à la diaspora et aux propriétaires de terrains exploitables,
            le Pôle 1 couvre la gestion complète du projet agricole avec une logique d’exécution rigoureuse,
            des rapports réguliers et un engagement minimum de 4 ans.
        </p>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Ce que nous gérons</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy">Une chaîne d’exécution complète</h2>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-5">
            @foreach ([
                ['title' => 'Conception', 'text' => 'Étude initiale, cadrage technique et planification du cycle.'],
                ['title' => 'Mise en place', 'text' => 'Organisation terrain, intrants, ressources et calendrier.'],
                ['title' => 'Production', 'text' => 'Suivi des opérations agricoles avec discipline d’exécution.'],
                ['title' => 'Suivi', 'text' => 'Reporting mensuel, indicateurs, documents et traçabilité.'],
                ['title' => 'Commercialisation', 'text' => 'Orientation débouchés et arbitrages selon le modèle retenu.'],
            ] as $step)
                <article class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">Étape</div>
                    <h3 class="mt-4 font-heading text-xl font-bold text-jagNavy">{{ $step['title'] }}</h3>
                    <p class="mt-4 text-sm leading-7 text-jagText">{{ $step['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-2 lg:px-8">
        <article class="rounded-[2rem] bg-white p-8 shadow-soft">
            <div class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Option 25%</div>
            <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">Commission standard</h2>
            <p class="mt-4 text-sm leading-7 text-jagText">
                Adaptée à un schéma de gestion avec un partage de valeur optimisé pour l’investisseur,
                sur la base d’un cadre opérationnel suivi et documenté.
            </p>
        </article>

        <article class="rounded-[2rem] bg-white p-8 shadow-soft">
            <div class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Option 35%</div>
            <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">Commission renforcée</h2>
            <p class="mt-4 text-sm leading-7 text-jagText">
                Correspond à un niveau d’intervention plus structuré selon la nature du projet, le besoin
                d’encadrement et le schéma d’exploitation retenu.
            </p>
        </article>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Engagement pluriannuel</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy">Pourquoi 4 ans</h2>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            @foreach ([
                ['year' => 'Année 1', 'text' => 'Installation, structuration et mise en place de la base d’exploitation.'],
                ['year' => 'Année 2', 'text' => 'Stabilisation opérationnelle et consolidation des cycles.'],
                ['year' => 'Année 3', 'text' => 'Montée en efficacité, meilleure visibilité et ajustements.'],
                ['year' => 'Année 4', 'text' => 'Pleine maturité du dispositif et lecture consolidée de la performance.'],
            ] as $item)
                <article class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">{{ $item['year'] }}</div>
                    <p class="mt-4 text-sm leading-7 text-jagText">{{ $item['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="flex flex-col justify-center">
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Simulation indicative</p>
                <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                    Estimez rapidement le potentiel de votre terrain
                </h2>

                <p class="mt-6 text-base leading-8 text-jagText">
                    Ce simulateur donne une projection simple pour amorcer la discussion. Il ne remplace pas
                    une étude réelle de terrain, mais il aide à se situer avant une prise de contact.
                </p>

                <div class="mt-8 space-y-4">
                    <div class="rounded-3xl bg-white p-5 shadow-soft">
                        <div class="text-sm font-semibold text-jagNavy">Lecture simple</div>
                        <p class="mt-2 text-sm leading-7 text-jagText">
                            Trois paramètres seulement : superficie, culture et irrigation.
                        </p>
                    </div>

                    <div class="rounded-3xl bg-white p-5 shadow-soft">
                        <div class="text-sm font-semibold text-jagNavy">Estimation prudente</div>
                        <p class="mt-2 text-sm leading-7 text-jagText">
                            Les chiffres affichés restent indicatifs et doivent être confirmés après analyse.
                        </p>
                    </div>

                    <div class="rounded-3xl bg-white p-5 shadow-soft">
                        <div class="text-sm font-semibold text-jagNavy">Passage à l’action</div>
                        <p class="mt-2 text-sm leading-7 text-jagText">
                            Après simulation, l’étape utile est une évaluation réelle du terrain avec l’équipe JAG.
                        </p>
                    </div>
                </div>
            </div>

            <div
                x-data="{
                    hectares: 1,
                    culture: 'mais',
                    irrigation: false,
                    get revenuePerHa() {
                        return { mais: 550000, riz: 700000, soja: 500000 }[this.culture] ?? 550000;
                    },
                    get coefficient() {
                        return this.irrigation ? 1.15 : 1;
                    },
                    get gross() {
                        return Math.round(this.hectares * this.revenuePerHa * this.coefficient);
                    },
                    get net() {
                        return Math.round(this.gross * 0.62);
                    },
                    get commissionRate() {
                        return this.irrigation ? 0.25 : 0.35;
                    },
                    get jagCommission() {
                        return Math.round(this.net * this.commissionRate);
                    },
                    get investorNet() {
                        return this.net - this.jagCommission;
                    }
                }"
                class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft lg:p-10"
            >
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <div class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Mini calculateur</div>
                        <h3 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy">Simulation rapide</h3>
                    </div>

                    <span class="rounded-full bg-jagMuted px-3 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-jagNavy">
                        Indicatif
                    </span>
                </div>

                <p class="mt-4 text-sm leading-7 text-jagText">
                    Estimation indicative — résultats réels variables selon les conditions du terrain.
                </p>

                <div class="mt-8 grid gap-5">
                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Superficie (ha)</span>
                        <input
                            x-model.number="hectares"
                            type="number"
                            min="1"
                            step="1"
                            class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none"
                        >
                    </label>

                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Culture</span>
                        <select
                            x-model="culture"
                            class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none"
                        >
                            <option value="mais">Maïs</option>
                            <option value="riz">Riz</option>
                            <option value="soja">Soja</option>
                        </select>
                    </label>

                    <label class="inline-flex items-center gap-3 rounded-2xl border border-slate-300 px-4 py-4">
                        <input x-model="irrigation" type="checkbox" class="rounded border-slate-300 text-jagGreen focus:ring-jagGreen">
                        <span class="text-sm text-jagText">Système d’irrigation disponible</span>
                    </label>
                </div>

                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl bg-jagMuted p-5">
                        <div class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Revenu estimé par cycle</div>
                        <div class="mt-2 font-heading text-2xl font-extrabold text-jagNavy" x-text="new Intl.NumberFormat('fr-FR').format(gross) + ' FCFA'"></div>
                    </div>

                    <div class="rounded-2xl bg-jagMuted p-5">
                        <div class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Bénéfice net estimé annuel</div>
                        <div class="mt-2 font-heading text-2xl font-extrabold text-jagNavy" x-text="new Intl.NumberFormat('fr-FR').format(net) + ' FCFA'"></div>
                    </div>

                    <div class="rounded-2xl bg-jagMuted p-5">
                        <div class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Commission JAG</div>
                        <div class="mt-2 font-heading text-2xl font-extrabold text-jagNavy" x-text="new Intl.NumberFormat('fr-FR').format(jagCommission) + ' FCFA'"></div>
                    </div>

                    <div class="rounded-2xl bg-jagMuted p-5">
                        <div class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Net investisseur</div>
                        <div class="mt-2 font-heading text-2xl font-extrabold text-jagGreen" x-text="new Intl.NumberFormat('fr-FR').format(investorNet) + ' FCFA'"></div>
                    </div>
                </div>

                <a
                    href="{{ route('contact.create', ['profile' => 'investisseur']) }}"
                    class="mt-8 inline-flex w-full items-center justify-center rounded-full bg-jagGreen px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white sm:w-auto"
                >
                    Demander une évaluation gratuite de mon terrain
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Passage à l’action</p>
        <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
            Parlons de votre projet foncier
        </h2>
        <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-jagText">
            Vous avez un terrain exploitable et vous cherchez un cadre de gestion sérieux, traçable et structuré.
        </p>

        <a
            href="{{ route('contact.create', ['profile' => 'investisseur']) }}"
            class="mt-10 inline-flex items-center justify-center rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white"
        >
            Prendre contact pour le Pôle 1
        </a>
    </div>
</section>
@endsection