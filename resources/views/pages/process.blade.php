@extends('layouts.app')

@section('title', 'Notre processus d’intervention | Just Agro Group')
@section('meta_description', 'Deux parcours d’intervention Just Agro Group : investisseur privé et industriel ou transformateur.')

@section('content')
<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Notre Processus</p>
        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold sm:text-5xl">
            Notre processus d’intervention
        </h1>
        <p class="mt-6 max-w-3xl text-base leading-8 text-slate-200">
            Deux parcours clairs selon votre profil : investisseur privé ou industriel / transformateur.
        </p>
        <p class="mt-5 max-w-4xl text-base leading-8 text-slate-200">
            Chez Just Agro Group, nous n’appliquons pas un processus unique à tous les clients. Nous avons structuré deux parcours distincts : un parcours de Maîtrise d’Ouvrage Agricole pour les investisseurs privés, et un parcours d’approvisionnement contractuel pour les industriels et transformateurs. Chaque parcours suit des étapes précises, documentées et pilotées.
        </p>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Processus Investisseur Privé — Pôle 1</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                De la qualification du terrain au bilan de cycle
            </h2>
        </div>

        @php($investorIcons = ['target', 'map', 'clipboard', 'document', 'leaf', 'shield', 'chart', 'truck'])
        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            @foreach ([
                ['title' => '1. Prise de contact & qualification', 'items' => ['Localisation du site', 'Superficie', 'Statut foncier', 'Type de culture envisagée', 'Disponibilité en eau', 'Objectifs de l’investisseur']],
                ['title' => '2. Visite et diagnostic du terrain', 'items' => ['Évaluation initiale', 'Analyse agronomique', 'Faisabilité technique', 'Contraintes majeures']],
                ['title' => '3. Élaboration du plan d’exploitation', 'items' => ['Choix des cultures', 'Calendrier cultural', 'Budget estimatif', 'Besoins techniques', 'Organisation opérationnelle']],
                ['title' => '4. Proposition technique et contractuelle', 'items' => ['Proposition de partenariat', 'Modèle 25 % ou 35 %', 'Responsabilités respectives', 'Cadre de suivi']],
                ['title' => '5. Mise en place opérationnelle', 'items' => ['Installation', 'Intrants', 'Chantier', 'Main-d’œuvre', 'Organisation du terrain']],
                ['title' => '6. Production & supervision', 'items' => ['Exécution', 'Visites techniques', 'Suivi agronomique', 'Ajustements']],
                ['title' => '7. Reporting mensuel & accès digital', 'items' => ['Rapport', 'Photos datées', 'Coûts', 'Incidents', 'Recommandations', 'Mon Espace Just', 'Option Just Control Live']],
                ['title' => '8. Récolte, valorisation & bilan', 'items' => ['Organisation de la récolte', 'Qualité', 'Commercialisation selon option', 'Bilan de cycle', 'Préparation du cycle suivant']],
            ] as $step)
                <article class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                        <x-icon :name="$investorIcons[$loop->index]" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-xl font-bold text-jagNavy">{{ $step['title'] }}</h3>
                    <ul class="mt-5 space-y-2 text-sm leading-7 text-jagText">
                        @foreach ($step['items'] as $item)
                            <li>• {{ $item }}</li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Processus Industriel / Transformateur — Pôle 2</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                De l’expression du besoin à la revue de performance
            </h2>
        </div>

        @php($industrialIcons = ['target', 'shield', 'document', 'map', 'clipboard', 'leaf', 'chart', 'truck'])
        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            @foreach ([
                ['title' => '1. Entretien de cadrage', 'items' => ['Besoin matière première', 'Volumes', 'Calendrier', 'Zone de livraison', 'Exigences qualité']],
                ['title' => '2. Préqualification du besoin', 'items' => ['Validation du besoin réel', 'Faisabilité d’approvisionnement', 'Premiers paramètres logistiques']],
                ['title' => '3. Lettre d’intention', 'items' => ['Produit', 'Volumes cibles', 'Période', 'Qualité', 'Logique d’approvisionnement']],
                ['title' => '4. Étude de structuration', 'items' => ['Bassins mobilisables', 'Schéma de production', 'Risques', 'Logistique', 'Planning']],
                ['title' => '5. Contrat d’approvisionnement', 'items' => ['Engagements', 'Responsabilités', 'Qualité', 'Prix', 'Conditions de livraison']],
                ['title' => '6. Mise en production / mobilisation', 'items' => ['Production contractuelle', 'Agrégation', 'Suivi terrain', 'Contrôle']],
                ['title' => '7. Suivi qualité & documentation', 'items' => ['Fiches lot', 'Contrôles', 'Traçabilité', 'Planning de livraison', 'Mon Espace Just']],
                ['title' => '8. Livraison & revue de performance', 'items' => ['Livraison', 'Réception', 'Validation documentaire', 'Ajustements pour la suite']],
            ] as $step)
                <article class="rounded-[2rem] bg-white p-6 shadow-soft">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagBlue/10 text-jagBlue">
                        <x-icon :name="$industrialIcons[$loop->index]" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-xl font-bold text-jagNavy">{{ $step['title'] }}</h3>
                    <ul class="mt-5 space-y-2 text-sm leading-7 text-jagText">
                        @foreach ($step['items'] as $item)
                            <li>• {{ $item }}</li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
