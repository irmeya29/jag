@extends('layouts.app')

@section('title', 'Pôle 2 — Fournisseur Industriel | Just Agro Group')
@section('meta_description', 'Approvisionnement contractuel industriel : Lettre d’intention, volumes engagés, traçabilité et contrats sur 3 ans.')

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
            Destiné aux industries, transformateurs, brasseries, mines et responsables supply chain, ce pôle repose sur une logique simple : nous ne produisons pas avant d’avoir un débouché sécurisé.
        </p>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Matières premières</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Cultures que nous pouvons structurer
            </h2>
            <p class="mt-5 text-base leading-8 text-jagText">
                Just Agro Group structure des productions agricoles orientées vers des débouchés industriels réels, avec une capacité de production irriguée et planifiée sur l’année.
            </p>
        </div>

        <div class="mt-10 overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-soft">
            <div class="hidden grid-cols-[1fr_1.4fr_1.2fr_1fr_1fr] bg-jagNavy px-6 py-5 text-xs font-heading font-bold uppercase tracking-[0.14em] text-white lg:grid">
                <div>Produit</div>
                <div>Usage industriel</div>
                <div>Mode d’approvisionnement</div>
                <div>Cycle</div>
                <div>Disponibilité</div>
            </div>

            @foreach ([
                ['Maïs grain', 'Brasseries, minoteries, alimentation', 'Production contractuelle / agrégation', 'Cycle maîtrisé (irrigué)', 'Élevée'],
                ['Riz paddy / blanchi', 'Transformation, distribution', 'Production contractuelle', 'Irrigué / pluvial optimisé', 'Moyenne à élevée'],
                ['Soja', 'Huileries, alimentation animale', 'Production contractuelle', 'Cycle maîtrisé', 'Moyenne'],
                ['Arachide', 'Huileries, transformation alimentaire', 'Production / agrégation', 'Cycle maîtrisé', 'Élevée'],
                ['Sésame', 'Export, huileries', 'Production contractuelle', 'Cycle maîtrisé', 'Moyenne'],
                ['Tomate industrielle', 'Transformation : concentré, purée', 'Production irriguée', 'Production continue', 'Variable'],
                ['Oignon', 'Distribution, transformation', 'Production irriguée / stockage', 'Production continue', 'Élevée'],
                ['Piment', 'Transformation, agroalimentaire', 'Production contractuelle', 'Production continue', 'Moyenne'],
            ] as $row)
                <div class="grid gap-3 border-t border-slate-200 px-6 py-5 text-sm leading-7 text-jagText lg:grid-cols-[1fr_1.4fr_1.2fr_1fr_1fr]">
                    <div class="font-semibold text-jagNavy">{{ $row[0] }}</div>
                    <div>{{ $row[1] }}</div>
                    <div>{{ $row[2] }}</div>
                    <div>{{ $row[3] }}</div>
                    <div>{{ $row[4] }}</div>
                </div>
            @endforeach
        </div>

        <p class="mt-8 rounded-[2rem] bg-jagMuted p-6 text-sm leading-7 text-jagText">
            NB : D’autres cultures peuvent être mises en place sur étude et contractualisation, dès lors qu’un débouché est clairement défini et sécurisé.
        </p>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Montée en charge</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Ordres de grandeur & logique de déploiement
            </h2>
            <p class="mt-5 text-base leading-8 text-jagText">
                Just Agro Group structure les volumes de production de manière progressive, en fonction des besoins contractuels, des capacités foncières et des conditions techniques.
            </p>
        </div>

        @php($stageIcons = ['target', 'clipboard', 'chart', 'map'])
        <div class="mt-12 grid gap-6 lg:grid-cols-4">
            @foreach ([
                ['title' => 'Pilote', 'volume' => '50 à 200 tonnes', 'text' => 'Tester la chaîne production–qualité–livraison.'],
                ['title' => 'Campagne contractuelle', 'volume' => '200 à 1 000 tonnes', 'text' => 'Sécuriser un approvisionnement structuré et régulier.'],
                ['title' => 'Annualisation', 'volume' => '1 000 tonnes et plus / an', 'text' => 'Intégrer la production dans un schéma industriel continu.'],
                ['title' => 'Multi-sites / multi-bassins', 'volume' => 'Volumes évolutifs', 'text' => 'Augmenter les capacités via plusieurs sites de production.'],
            ] as $stage)
                <article class="rounded-[2rem] bg-white p-6 shadow-soft">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagBlue/10 text-jagBlue">
                        <x-icon :name="$stageIcons[$loop->index]" class="h-6 w-6" />
                    </div>
                    <div class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">{{ $stage['title'] }}</div>
                    <h3 class="mt-4 font-heading text-2xl font-extrabold text-jagNavy">{{ $stage['volume'] }}</h3>
                    <p class="mt-4 text-sm leading-7 text-jagText">{{ $stage['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
        <div>
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Zones d’intervention & logistique</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Des bassins structurés et une logistique cadrée
            </h2>
        </div>

        <div class="space-y-5 text-sm leading-7 text-jagText">
            <p>
                Just Agro Group opère à partir de bassins de production structurés au Burkina Faso, notamment dans le Centre-Ouest, le Centre et les Hauts-Bassins, où les activités sont suivies de manière opérationnelle et continue.
            </p>
            <p>
                L’entreprise est actuellement en phase d’extension et commence à déployer ses opérations hors du Burkina Faso, avec une approche progressive basée sur la contractualisation préalable et la sécurisation des conditions de production et de livraison.
            </p>
            <p>
                La production est organisée à la fois en sites sous gestion directe et via des producteurs encadrés, permettant de mobiliser des volumes sur un ou plusieurs bassins selon les besoins contractuels.
            </p>
            <p>
                Les modalités de livraison sont définies au cas par cas : départ champ, départ entrepôt ou livraison directe sur site client. Les flux sont organisés, consolidés et contrôlés avant expédition, avec une traçabilité complète des volumes livrés.
            </p>
            <p class="font-semibold text-jagNavy">
                Toute extension géographique est conditionnée par l’existence d’un besoin industriel clairement défini, validé contractuellement, ainsi que par la disponibilité de bassins adaptés et la maîtrise des contraintes logistiques locales.
            </p>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Qualité, traçabilité & documentation</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Une qualité définie, mesurée, documentée et accessible
            </h2>
            <p class="mt-5 text-base leading-8 text-jagText">
                Chez Just Agro Group, la qualité et la traçabilité sont définies en amont et suivies de manière documentée à chaque étape. Les spécifications techniques sont établies dès la phase de contractualisation : Lettre d’intention (LOI) puis contrat.
            </p>
        </div>

        @php($documentIcons = ['document', 'shield', 'truck', 'clipboard', 'chart', 'map', 'leaf', 'target'])
        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            @foreach (['Fiches lot : origine, parcelle, caractéristiques', 'Suivi qualité et contrôles réalisés', 'Bons de livraison', 'Procès-verbaux de réception / livraison', 'Rapports de suivi et rapports de campagne', 'Historique d’origine', 'Photos et reporting terrain', 'Documents contractuels et planning logistique'] as $document)
                <article class="rounded-[2rem] bg-white p-6 shadow-soft">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagOrange/10 text-jagOrange">
                        <x-icon :name="$documentIcons[$loop->index]" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-lg font-bold text-jagNavy">{{ $document }}</h3>
                </article>
            @endforeach
        </div>

        <div class="mt-10 rounded-[2rem] bg-white p-8 shadow-soft">
            <h3 class="font-heading text-2xl font-extrabold text-jagNavy">Option — Just Control Live</h3>
            <p class="mt-4 text-sm leading-7 text-jagText">
                En complément, l’option Just Control Live permet d’accéder à une visualisation en temps réel du site de production, directement depuis votre espace client.
            </p>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="rounded-[2rem] border border-slate-200 bg-jagMuted p-8 shadow-soft lg:p-10">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Cadrage préalable</p>
            <h2 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">
                Avant de lancer un programme : la Lettre d’intention (LOI)
            </h2>
            <p class="mt-5 max-w-4xl text-base leading-8 text-jagText">
                Avant toute mise en production, Just Agro Group formalise avec le client un cadre clair basé sur une Lettre d’intention (LOI). Elle permet d’encadrer l’intention d’achat, les volumes cibles, le calendrier, les spécifications principales et la logique d’approvisionnement afin de sécuriser la planification en amont.
            </p>

            <div class="mt-10 grid gap-8 lg:grid-cols-3">
                <article class="rounded-[2rem] bg-white p-6">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagBlue/10 text-jagBlue">
                        <x-icon name="target" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-xl font-bold text-jagNavy">Éléments définis en amont</h3>
                    <ul class="mt-5 space-y-3 text-sm leading-7 text-jagText">
                        @foreach (['Produit concerné', 'Volume cible', 'Période de livraison', 'Zone de livraison', 'Exigences de qualité', 'Mode logistique', 'Horizon contractuel'] as $item)
                            <li>• {{ $item }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="rounded-[2rem] bg-white p-6">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                        <x-icon name="shield" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-xl font-bold text-jagNavy">Ce que permet la Lettre d’intention (LOI)</h3>
                    <ul class="mt-5 space-y-3 text-sm leading-7 text-jagText">
                        @foreach (['Valider l’existence d’un besoin industriel réel', 'Structurer la production en fonction de ce besoin', 'Mobiliser les ressources', 'Réduire les incertitudes avant engagement complet'] as $item)
                            <li>• {{ $item }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="rounded-[2rem] bg-white p-6">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagOrange/10 text-jagOrange">
                        <x-icon name="document" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-xl font-bold text-jagNavy">Passage au contrat</h3>
                    <ul class="mt-5 space-y-3 text-sm leading-7 text-jagText">
                        <li>• La Lettre d’intention (LOI) sert de base de travail</li>
                        <li>• Les conditions sont affinées : qualité, prix, logistique, responsabilités</li>
                        <li>• Un contrat formel d’approvisionnement est établi</li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">De l’expression de besoin à la première livraison</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold sm:text-4xl">
                Un parcours structuré avant chaque programme
            </h2>
        </div>

        @php($deliveryIcons = ['target', 'document', 'leaf', 'truck'])
        <div class="mt-12 grid gap-6 lg:grid-cols-4">
            @foreach ([
                ['title' => 'Expression de besoin', 'text' => 'Produit, volumes, qualité attendue, calendrier et zone de livraison.'],
                ['title' => 'Lettre d’intention (LOI)', 'text' => 'Cadrage des paramètres essentiels avant engagement complet.'],
                ['title' => 'Production structurée', 'text' => 'Mobilisation des sites, intrants, producteurs et dispositifs de suivi.'],
                ['title' => 'Première livraison', 'text' => 'Contrôle, documentation, expédition et réception selon les conditions validées.'],
            ] as $step)
                <article class="rounded-[2rem] border border-white/10 bg-white/5 p-6">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-white">
                        <x-icon :name="$deliveryIcons[$loop->index]" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-xl font-bold text-white">{{ $step['title'] }}</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-300">{{ $step['text'] }}</p>
                </article>
            @endforeach
        </div>

        <a href="{{ route('contact.create', ['profile' => 'industriel']) }}" class="mt-10 inline-flex rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
            Sécuriser mon approvisionnement
        </a>
    </div>
</section>
@endsection
