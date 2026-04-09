@extends('layouts.app')

@section('title', 'Notre Processus | Just Agro Group')
@section('meta_description', 'Découvrez les étapes du processus Just Agro Group, du diagnostic à la livraison.')

@section('content')
<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Notre Processus</p>
        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold sm:text-5xl">
            Un processus lisible, contractualisé et piloté avec rigueur
        </h1>
        <p class="mt-6 max-w-3xl text-base leading-8 text-slate-200">
            Chez Just Agro Group, chaque projet suit une logique claire : diagnostic, structuration,
            production et livraison. Cette méthode permet de sécuriser l’exécution, d’améliorer la
            traçabilité et d’apporter une lecture professionnelle aux investisseurs comme aux industriels.
        </p>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Timeline générale</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Les 4 étapes de notre processus
            </h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-4">
            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="font-heading text-4xl font-extrabold text-jagGreen">01</div>
                <h3 class="mt-4 font-heading text-2xl font-bold text-jagNavy">Diagnostic</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Analyse du besoin, du terrain ou du besoin d’approvisionnement, évaluation de la faisabilité
                    et cadrage du projet.
                </p>
            </article>

            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="font-heading text-4xl font-extrabold text-jagBlue">02</div>
                <h3 class="mt-4 font-heading text-2xl font-bold text-jagNavy">Structuration</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Organisation technique, planification des étapes, cadrage des ressources, documents
                    contractuels et mise en place du suivi.
                </p>
            </article>

            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="font-heading text-4xl font-extrabold text-jagOrange">03</div>
                <h3 class="mt-4 font-heading text-2xl font-bold text-jagNavy">Production</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Pilotage opérationnel, exécution terrain, contrôle de qualité, reporting et traçabilité
                    des opérations réalisées.
                </p>
            </article>

            <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
                <div class="font-heading text-4xl font-extrabold text-jagNavy">04</div>
                <h3 class="mt-4 font-heading text-2xl font-bold text-jagNavy">Livraison</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Livraison ou restitution finale, documentation associée, bilan de cycle et visibilité
                    complète sur les éléments clés du projet.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-2 lg:px-8">
        <article class="rounded-[2rem] bg-white p-8 shadow-soft">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">Pôle 1 — MOA</p>
            <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">Un engagement sur 4 ans</h2>
            <p class="mt-4 text-sm leading-7 text-jagText">
                Pour les investisseurs privés, la logique pluriannuelle permet d’installer le projet,
                de stabiliser les cycles et de construire une lecture sérieuse de la performance.
            </p>

            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-jagMuted p-5">
                    <div class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagGreen">Année 1</div>
                    <p class="mt-3 text-sm leading-7 text-jagText">Installation, cadrage, mise en place et démarrage.</p>
                </div>
                <div class="rounded-3xl bg-jagMuted p-5">
                    <div class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagGreen">Année 2</div>
                    <p class="mt-3 text-sm leading-7 text-jagText">Montée en régime et stabilisation des opérations.</p>
                </div>
                <div class="rounded-3xl bg-jagMuted p-5">
                    <div class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagGreen">Année 3</div>
                    <p class="mt-3 text-sm leading-7 text-jagText">Optimisation, ajustements et visibilité renforcée.</p>
                </div>
                <div class="rounded-3xl bg-jagMuted p-5">
                    <div class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagGreen">Année 4</div>
                    <p class="mt-3 text-sm leading-7 text-jagText">Lecture consolidée de la performance et maturité du dispositif.</p>
                </div>
            </div>
        </article>

        <article class="rounded-[2rem] bg-white p-8 shadow-soft">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">Pôle 2 — Industriel</p>
            <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">Une logique contractuelle sur 3 ans</h2>
            <p class="mt-4 text-sm leading-7 text-jagText">
                Pour les industriels, le cadre sur 3 ans améliore la visibilité sur les volumes, les livraisons,
                la qualité et l’organisation de la relation d’approvisionnement.
            </p>

            <div class="mt-8 space-y-4">
                <div class="rounded-3xl bg-jagMuted p-5 text-sm leading-7 text-jagText">
                    <span class="font-semibold text-jagNavy">Année 1 :</span> mise en place du cadre et lancement opérationnel.
                </div>
                <div class="rounded-3xl bg-jagMuted p-5 text-sm leading-7 text-jagText">
                    <span class="font-semibold text-jagNavy">Année 2 :</span> consolidation des flux et montée en fiabilité.
                </div>
                <div class="rounded-3xl bg-jagMuted p-5 text-sm leading-7 text-jagText">
                    <span class="font-semibold text-jagNavy">Année 3 :</span> optimisation du dispositif et relation durable.
                </div>
            </div>
        </article>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[1.05fr_0.95fr] lg:px-8">
        <div>
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Mon Espace Just</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Le prolongement digital du processus
            </h2>
            <p class="mt-6 text-base leading-8 text-jagText">
                Le processus ne s’arrête pas à l’exécution terrain. La plateforme Mon Espace Just prolonge
                cette logique avec un accès structuré aux rapports, documents, alertes et états d’avancement.
            </p>

            <ul class="mt-8 space-y-4 text-sm leading-7 text-jagText">
                <li>• Rapports PDF centralisés</li>
                <li>• Documents contractuels accessibles</li>
                <li>• Suivi projet par profil</li>
                <li>• Visibilité renforcée pour les partenaires</li>
            </ul>

            <a href="{{ route('mon-espace-just') }}"
               class="mt-10 inline-flex rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
                Découvrir Mon Espace Just
            </a>
        </div>

        <div class="rounded-[2rem] bg-jagMuted p-8 shadow-soft">
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-white p-5">
                    <div class="text-sm font-semibold text-jagNavy">Suivi</div>
                    <div class="mt-2 text-xs text-jagText">États et informations clés</div>
                </div>
                <div class="rounded-3xl bg-white p-5">
                    <div class="text-sm font-semibold text-jagNavy">Rapports</div>
                    <div class="mt-2 text-xs text-jagText">Téléchargement mensuel</div>
                </div>
                <div class="rounded-3xl bg-white p-5">
                    <div class="text-sm font-semibold text-jagNavy">Documents</div>
                    <div class="mt-2 text-xs text-jagText">Contrats, certificats, bilans</div>
                </div>
                <div class="rounded-3xl bg-white p-5">
                    <div class="text-sm font-semibold text-jagNavy">Traçabilité</div>
                    <div class="mt-2 text-xs text-jagText">Pilotage plus transparent</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection