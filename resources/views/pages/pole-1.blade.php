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
            Le Pôle 1 s’adresse aux investisseurs, à la diaspora et aux propriétaires de terrains qui veulent un cadre de gestion agricole structuré. JAG prend en charge la conception technique du projet, l’organisation opérationnelle, le suivi de l’exécution, le reporting et l’encadrement de la production, tandis que le client finance les postes d’investissement et d’exploitation définis au départ.
        </p>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Ce que prend en charge Just Agro Group</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Une prise en charge complète et structurée
            </h2>
            <p class="mt-5 text-base leading-8 text-jagText">
                Just Agro Group assure une prise en charge complète et structurée de votre projet agricole, de l’analyse initiale jusqu’au suivi opérationnel et à la valorisation de la production.
            </p>
        </div>

        @php($phaseIcons = ['map', 'leaf', 'chart', 'truck'])
        <div class="mt-12 grid gap-6 lg:grid-cols-4">
            @foreach ([
                ['title' => 'Phase 1 — Analyse & conception', 'items' => ['Évaluation initiale du terrain', 'Diagnostic agronomique', 'Élaboration du plan d’exploitation', 'Définition du calendrier cultural', 'Sélection technique des cultures adaptées']],
                ['title' => 'Phase 2 — Mise en place & production', 'items' => ['Organisation du chantier agricole', 'Planification et gestion des intrants', 'Mobilisation de la main-d’œuvre', 'Supervision technique continue', 'Réalisation de visites de terrain']],
                ['title' => 'Phase 3 — Suivi & pilotage', 'items' => ['Rapports techniques mensuels', 'Suivi détaillé des coûts', 'Traçabilité complète des opérations', 'Accès aux données via Mon Espace Just']],
                ['title' => 'Phase 4 — Récolte & valorisation', 'items' => ['Organisation de la récolte', 'Contrôle qualité', 'Orientation commerciale ou commercialisation selon option']],
            ] as $phase)
                <article class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                        <x-icon :name="$phaseIcons[$loop->index]" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-xl font-bold text-jagNavy">{{ $phase['title'] }}</h3>
                    <ul class="mt-5 space-y-3 text-sm leading-7 text-jagText">
                        @foreach ($phase['items'] as $item)
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
        <div class="max-w-2xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Répartition des rôles</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Un cadre clair entre financement et pilotage
            </h2>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            <article class="rounded-[2rem] bg-white p-8 shadow-soft">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-jagOrange/10 text-jagOrange">
                    <x-icon name="target" class="h-7 w-7" />
                </div>
                <h3 class="font-heading text-2xl font-extrabold text-jagNavy">Ce que finance le client</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Le client porte l’investissement nécessaire à la mise en production :
                </p>
                <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                    @foreach (['Foncier, propriété ou mise à disposition', 'Investissements d’installation, aménagement et équipements', 'Intrants agricoles : semences, engrais, traitements', 'Main-d’œuvre', 'Eau et système d’irrigation', 'Logistique opérationnelle', 'Charges d’exploitation', 'Provisions financières convenues'] as $item)
                        <li>• {{ $item }}</li>
                    @endforeach
                </ul>
            </article>

            <article class="rounded-[2rem] bg-white p-8 shadow-soft">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                    <x-icon name="shield" class="h-7 w-7" />
                </div>
                <h3 class="font-heading text-2xl font-extrabold text-jagNavy">Ce que pilote Just Agro Group</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Just Agro Group assure la structuration et le pilotage complet du projet :
                </p>
                <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                    @foreach (['Structuration technique et stratégique', 'Organisation et exécution des opérations', 'Encadrement et supervision de terrain', 'Suivi agronomique continu', 'Reporting mensuel détaillé', 'Suivi des coûts et traçabilité', 'Contrôle qualité et encadrement opérationnel'] as $item)
                        <li>• {{ $item }}</li>
                    @endforeach
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Suivi & reporting</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Concrètement, que recevez-vous ?
            </h2>
            <p class="mt-5 text-base leading-8 text-jagText">
                Chez Just Agro Group, le suivi ne se limite pas à une promesse. Chaque mois, vous recevez un reporting structuré, clair et exploitable, directement accessible depuis votre espace sécurisé “Mon Espace Just”.
            </p>
        </div>

        @php($reportIcons = ['document', 'clipboard', 'map', 'chart', 'shield', 'target', 'leaf'])
        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach ([
                ['title' => 'Un rapport technique détaillé', 'text' => 'État des cultures, opérations réalisées, niveau de développement agronomique.'],
                ['title' => 'Un état d’avancement des travaux', 'text' => 'Travaux effectués vs planifiés, respect du calendrier cultural.'],
                ['title' => 'Des photos datées du site', 'text' => 'Preuves visuelles réelles de l’évolution de votre exploitation.'],
                ['title' => 'Un suivi des dépenses engagées', 'text' => 'Détail des coûts avec transparence totale.'],
                ['title' => 'Un point sur les incidents éventuels', 'text' => 'Aléas climatiques, contraintes techniques, écarts observés.'],
                ['title' => 'Des recommandations correctives', 'text' => 'Ajustements techniques proposés pour sécuriser la production.'],
                ['title' => 'Les perspectives du mois suivant', 'text' => 'Actions prévues, étapes clés à venir.'],
            ] as $report)
                <article class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagBlue/10 text-jagBlue">
                        <x-icon :name="$reportIcons[$loop->index]" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-xl font-bold text-jagNavy">{{ $report['title'] }}</h3>
                    <p class="mt-4 text-sm leading-7 text-jagText">{{ $report['text'] }}</p>
                </article>
            @endforeach
        </div>

        <div class="mt-10 rounded-[2rem] bg-jagMuted p-8 shadow-soft">
            <h3 class="font-heading text-2xl font-extrabold text-jagNavy">Option — Just Control Live</h3>
            <p class="mt-4 text-sm leading-7 text-jagText">
                Pour aller plus loin dans la transparence, Just Agro Group propose une option de suivi en temps réel. Accédez, à tout moment, à une visualisation directe de votre site de production.
            </p>
            <ul class="mt-6 grid gap-3 text-sm leading-7 text-jagText md:grid-cols-3">
                <li>• Surveillance en temps réel des activités sur le terrain</li>
                <li>• Accès visuel sécurisé depuis votre espace client</li>
                <li>• Suivi sans intermédiaire, où que vous soyez</li>
            </ul>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Modèle de rémunération</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Une rémunération appliquée sur le bénéfice net réel
            </h2>
            <p class="mt-5 text-base leading-8 text-jagText">
                Les 25 % et 35 % sont appliqués sur le bénéfice net réel de la production.
            </p>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            <article class="rounded-[2rem] bg-white p-8 shadow-soft">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                    <x-icon name="clipboard" class="h-7 w-7" />
                </div>
                <div class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">25 % — Gestion & production</div>
                <h3 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">Production prise en charge</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Just Agro Group prend en charge la production : conception, mise en place, suivi et récolte. La vente est assurée par le client.
                </p>
                <p class="mt-5 font-semibold text-jagNavy">Rémunération : 25 % du bénéfice net.</p>
            </article>

            <article class="rounded-[2rem] bg-white p-8 shadow-soft">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-jagOrange/10 text-jagOrange">
                    <x-icon name="truck" class="h-7 w-7" />
                </div>
                <div class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">35 % — Gestion intégrale</div>
                <h3 class="mt-4 font-heading text-3xl font-extrabold text-jagNavy">Production et commercialisation</h3>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Just Agro Group gère la production et la commercialisation : vente, négociation et débouchés.
                </p>
                <p class="mt-5 font-semibold text-jagNavy">Rémunération : 35 % du bénéfice net.</p>
            </article>
        </div>

        <p class="mt-8 rounded-[2rem] bg-white p-6 text-sm leading-7 text-jagText shadow-soft">
            NB : Un forfait de gestion indépendant peut être appliqué pour couvrir les coûts de supervision, indépendamment du résultat de la production.
        </p>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Gestion des aléas</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Comment sont traités les risques ?
            </h2>
            <p class="mt-5 text-base leading-8 text-jagText">
                L’activité agricole comporte des risques réels : aléas climatiques, maladies, variations de rendement, contraintes logistiques ou commerciales. Chez Just Agro Group, ces situations sont anticipées, documentées et pilotées.
            </p>
        </div>

        @php($riskIcons = ['target', 'document', 'chart', 'shield', 'clipboard', 'map'])
        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach ([
                ['title' => 'Analyse précise des causes', 'text' => 'Identification des facteurs techniques, climatiques ou opérationnels.'],
                ['title' => 'Documentation complète', 'text' => 'Traçabilité des écarts entre prévisions et résultats réels.'],
                ['title' => 'Ajustement des conditions de rémunération', 'text' => 'Les pourcentages peuvent être révisés après analyse, en fonction des causes identifiées.'],
                ['title' => 'Mesures correctives immédiates', 'text' => 'Ajustement des pratiques culturales et des décisions techniques.'],
                ['title' => 'Révision du plan de campagne suivant', 'text' => 'Optimisation des hypothèses agronomiques et financières.'],
                ['title' => 'Communication transparente', 'text' => 'Reporting clair, sans dissimulation, via Mon Espace Just.'],
            ] as $risk)
                <article class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagOrange/10 text-jagOrange">
                        <x-icon :name="$riskIcons[$loop->index]" class="h-6 w-6" />
                    </div>
                    <h3 class="font-heading text-xl font-bold text-jagNavy">{{ $risk['title'] }}</h3>
                    <p class="mt-4 text-sm leading-7 text-jagText">{{ $risk['text'] }}</p>
                </article>
            @endforeach
        </div>

        <p class="mt-10 text-base font-semibold leading-8 text-jagNavy">
            Nous ne promettons pas l’absence de risque. Nous garantissons une gestion rigoureuse, transparente et équitable des aléas.
        </p>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
        <div class="flex flex-col justify-center">
            <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Simulation financière</p>
            <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
                Estimez rapidement le potentiel de votre terrain
            </h2>

            <p class="mt-6 text-base leading-8 text-jagText">
                Ce simulateur donne une projection simple pour amorcer la discussion. Il ne remplace pas une étude réelle de terrain, mais il aide à se situer avant une prise de contact.
            </p>
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
                    <input x-model.number="hectares" type="number" min="1" step="1" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none">
                </label>

                <label class="block">
                    <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Culture</span>
                    <select x-model="culture" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none">
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

            <a href="{{ route('contact.create', ['profile' => 'investisseur']) }}" class="mt-8 inline-flex w-full items-center justify-center rounded-full bg-jagGreen px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white sm:w-auto">
                Demander une évaluation gratuite de mon terrain
            </a>
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-8">
        <h2 class="font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
            Parlons de votre projet foncier
        </h2>
        <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-jagText">
            Vous avez un terrain exploitable et vous cherchez un cadre de gestion sérieux, traçable et structuré.
        </p>

        <a href="{{ route('contact.create', ['profile' => 'investisseur']) }}" class="mt-10 inline-flex items-center justify-center rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
            Prendre contact pour le Pôle 1
        </a>
    </div>
</section>
@endsection
