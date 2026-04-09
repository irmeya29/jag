@extends('layouts.app')

@section('title', 'Pôle 2 — Fournisseur Industriel | Just Agro Group')
@section('meta_description', 'Approvisionnement contractuel industriel : LOI, volumes engagés, traçabilité et contrats sur 3 ans.')

@section('content')
<section class="bg-[linear-gradient(135deg,#0D2137,#1E9BD7)] py-20 text-white sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.22em]">
            Pôle 2 — Fournisseur Contractuel Industriel
        </span>

        <h1 class="mt-6 max-w-4xl font-heading text-4xl font-extrabold sm:text-5xl">
            Sécuriser un approvisionnement local fiable, traçable et exécuté avec discipline
        </h1>

        <p class="mt-6 max-w-3xl text-base leading-8 text-white/85">
            Destiné aux industries, transformateurs, brasseries, mines et responsables supply chain,
            ce pôle repose sur une logique simple : nous ne produisons pas avant d’avoir un débouché sécurisé.
        </p>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="rounded-[2rem] border border-slate-200 bg-jagMuted p-10 shadow-soft">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Principe fondateur</p>
            <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">
                Nous ne produisons pas avant d’avoir un débouché sécurisé
            </h2>
            <p class="mt-5 max-w-4xl text-base leading-8 text-jagText">
                Ce principe structure la logique contractuelle, sécurise le pilotage des volumes
                et évite la production spéculative.
            </p>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Processus</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy">De la LOI à la livraison</h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-4">
            @foreach ([
                ['title' => 'LOI', 'text' => 'Lettre d’Intention cadrant le besoin, les volumes et la logique d’approvisionnement.'],
                ['title' => 'Planification', 'text' => 'Organisation des capacités de production, séquencement et paramètres d’exécution.'],
                ['title' => 'Production', 'text' => 'Suivi du cycle avec visibilité sur l’origine, les opérations et la qualité.'],
                ['title' => 'Livraison', 'text' => 'Pilotage des livraisons contractuelles et documentation associée.'],
            ] as $step)
                <article class="rounded-[2rem] bg-white p-6 shadow-soft">
                    <div class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">Étape</div>
                    <h3 class="mt-4 font-heading text-xl font-bold text-jagNavy">{{ $step['title'] }}</h3>
                    <p class="mt-4 text-sm leading-7 text-jagText">{{ $step['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Garanties</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy">Cinq engagements contractuels</h2>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-5">
            @foreach ([
                'Visibilité contractuelle',
                'Traçabilité des lots',
                'Suivi qualité documenté',
                'Coordination logistique',
                'Cadre pluriannuel maîtrisé',
            ] as $guarantee)
                <article class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-jagMuted text-2xl">✓</div>
                    <h3 class="mt-6 font-heading text-xl font-bold text-jagNavy">{{ $guarantee }}</h3>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
        <div>
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Secteurs</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold sm:text-4xl">Industries que nous approvisionnons</h2>

            <div class="mt-8 flex flex-wrap gap-3 text-sm">
                @foreach (['Brasseries', 'Huileries', 'Mines', 'Transformateurs', 'Minoteries', 'Grandes surfaces', 'Cantines industrielles'] as $sector)
                    <span class="rounded-full border border-white/15 bg-white/10 px-4 py-3">{{ $sector }}</span>
                @endforeach
            </div>
        </div>

        <div class="rounded-[2rem] bg-white p-8 text-jagNavy shadow-soft">
            <div class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Cadre 3 ans</div>
            <h3 class="mt-4 font-heading text-3xl font-extrabold">Contrats fermes sur 3 ans</h3>
            <p class="mt-4 text-sm leading-7 text-jagText">
                Ce cadre permet de stabiliser la relation, d’améliorer la visibilité opérationnelle
                et de réduire l’incertitude d’approvisionnement.
            </p>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Comparatif</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy">
                Approvisionnement traditionnel vs Just Agro Group
            </h2>
        </div>

        <div class="mt-10 overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-soft">
            <div class="grid grid-cols-3 bg-jagNavy px-6 py-5 text-sm font-heading font-bold uppercase tracking-[0.16em] text-white">
                <div>Critère</div>
                <div>Traditionnel</div>
                <div>Just Agro Group</div>
            </div>

            @foreach ([
                ['Visibilité volumes', 'Faible', 'Pilotée par cadre contractuel'],
                ['Traçabilité', 'Hétérogène', 'Structurée et documentée'],
                ['Prévisibilité livraison', 'Variable', 'Planifiée et suivie'],
                ['Engagement durée', 'Court terme', '3 ans'],
            ] as $row)
                <div class="grid grid-cols-3 border-t border-slate-200 px-6 py-5 text-sm leading-7 text-jagText">
                    <div class="font-semibold text-jagNavy">{{ $row[0] }}</div>
                    <div>{{ $row[1] }}</div>
                    <div>{{ $row[2] }}</div>
                </div>
            @endforeach
        </div>

        <a
            href="{{ route('contact.create', ['profile' => 'industriel']) }}"
            class="mt-10 inline-flex rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white"
        >
            Sécuriser mon approvisionnement
        </a>
    </div>
</section>
@endsection