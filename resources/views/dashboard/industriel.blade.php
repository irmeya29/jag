@extends('layouts.dashboard')

@section('title', 'Espace industriel | Just Agro Group')
@section('heading', 'Espace industriel / transformateur')

@section('content')
@if ($program)
    <section class="rounded-[2rem] bg-white p-8 shadow-soft">
        <div class="grid gap-4 lg:grid-cols-5">
            @foreach ([
                'Client / entreprise' => $program->company ?: $program->client->name,
                'Produit' => collect($program->cultures)->join(', ') ?: 'À préciser',
                'Campagne ou programme' => $program->name,
                'Statut' => str_replace('_', ' ', $program->status),
                'Fenêtre de livraison' => $program->delivery_window ?: 'À préciser',
            ] as $label => $value)
                <div class="rounded-2xl bg-jagMuted p-4">
                    <div class="text-[10px] font-heading font-bold uppercase tracking-[0.16em] text-slate-500">{{ $label }}</div>
                    <div class="mt-2 text-sm font-semibold text-jagNavy">{{ $value }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mt-8 grid gap-6 lg:grid-cols-5">
        @foreach ([
            'Volume contracté' => $program->contracted_volume ? $program->contracted_volume.' t' : 'À préciser',
            'Volume mobilisé' => $program->mobilized_volume ? $program->mobilized_volume.' t' : 'À préciser',
            'Volume livré' => $program->delivered_volume ? $program->delivered_volume.' t' : 'À préciser',
            'Prochaine livraison' => $program->deliveries->first()?->planned_at?->format('d/m/Y') ?? 'À programmer',
            'Conformité documentaire' => $program->quality_status ?: 'En suivi',
        ] as $label => $value)
            <div class="rounded-[2rem] bg-white p-6 shadow-soft">
                <div class="text-sm text-slate-500">{{ $label }}</div>
                <div class="mt-3 font-heading text-xl font-extrabold text-jagNavy">{{ $value }}</div>
            </div>
        @endforeach
    </section>

    <section x-data="{ tab: 'contract' }" class="mt-8 rounded-[2rem] bg-white p-6 shadow-soft">
        <div class="flex gap-2 overflow-x-auto pb-2">
            @foreach ([
                'contract' => 'Vue contrat',
                'program' => 'Programme',
                'deliveries' => 'Livraisons',
                'quality' => 'Qualité',
                'documents' => 'Documentation',
                'alerts' => 'Alertes',
                'history' => 'Historique',
                'live' => 'Just Control Live',
            ] as $key => $label)
                <button @click="tab = '{{ $key }}'" :class="tab === '{{ $key }}' ? 'bg-jagNavy text-white' : 'bg-jagMuted text-jagNavy'" class="shrink-0 rounded-full px-4 py-3 text-xs font-heading font-bold uppercase tracking-[0.14em]">{{ $label }}</button>
            @endforeach
        </div>

        <div class="mt-8">
            <div x-show="tab === 'contract'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Vue contrat</h2>
                <div class="mt-6 grid gap-4 lg:grid-cols-4">
                    <div class="rounded-2xl bg-jagMuted p-5">Lettre d’intention (LOI) : {{ $program->documents->firstWhere('type', 'LOI')?->title ?? 'À déposer' }}</div>
                    <div class="rounded-2xl bg-jagMuted p-5">Contrat : {{ $program->documents->firstWhere('type', 'Contrat')?->title ?? 'À déposer' }}</div>
                    <div class="rounded-2xl bg-jagMuted p-5">Période couverte : {{ $program->cycle ?: 'À préciser' }}</div>
                    <div class="rounded-2xl bg-jagMuted p-5">Engagements : {{ $program->contracted_volume ?: 0 }} t</div>
                </div>
            </div>

            <div x-cloak x-show="tab === 'program'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Programme d’approvisionnement</h2>
                <div class="mt-6 grid gap-4 lg:grid-cols-4">
                    <div class="rounded-2xl border border-slate-200 p-5">Produit : {{ collect($program->cultures)->join(', ') ?: 'À préciser' }}</div>
                    <div class="rounded-2xl border border-slate-200 p-5">Volume cible : {{ $program->contracted_volume ?: 'À préciser' }}</div>
                    <div class="rounded-2xl border border-slate-200 p-5">Planning : {{ $program->delivery_window ?: 'À préciser' }}</div>
                    <div class="rounded-2xl border border-slate-200 p-5">Bassins : {{ $program->location ?: 'À préciser' }}</div>
                </div>
            </div>

            <div x-cloak x-show="tab === 'deliveries'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Livraisons</h2>
                <div class="mt-6 space-y-3">
                    @forelse ($program->deliveries as $delivery)
                        <div class="rounded-2xl border border-slate-200 p-5">{{ $delivery->lot_reference }} — {{ $delivery->volume }} t — prévu {{ optional($delivery->planned_at)->format('d/m/Y') }} — {{ $delivery->reception_status }}</div>
                    @empty
                        <p class="text-sm text-slate-500">Aucune livraison enregistrée.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'quality'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Qualité & traçabilité</h2>
                <div class="mt-6 grid gap-4 lg:grid-cols-3">
                    @forelse ($program->qualityChecks as $check)
                        <div class="rounded-2xl border border-slate-200 p-5">
                            <div class="font-semibold text-jagNavy">{{ $check->lot_reference }}</div>
                            <p class="mt-2 text-sm text-jagText">Humidité {{ $check->humidity }}% — Calibrage {{ $check->calibration }} — Impuretés {{ $check->impurity_rate }}%</p>
                        </div>
                    @empty
                        <p class="text-sm text-slate-500">Aucun contrôle qualité renseigné.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'documents'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Documentation</h2>
                <div class="mt-6 grid gap-3 lg:grid-cols-2">
                    @forelse ($program->documents as $document)
                        <div class="rounded-2xl border border-slate-200 p-5">{{ $document->type }} — <span class="font-semibold text-jagNavy">{{ $document->title }}</span></div>
                    @empty
                        <p class="text-sm text-slate-500">Aucun document disponible.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'alerts'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Alertes logistiques</h2>
                <div class="mt-6 space-y-3">
                    @forelse ($program->alerts as $alert)
                        <div class="rounded-2xl border border-slate-200 p-5"><span class="font-semibold text-jagNavy">{{ $alert->title }}</span><p class="mt-2 text-sm text-jagText">{{ $alert->message }}</p><p class="mt-2 text-sm text-jagOrange">{{ $alert->recommendation }}</p></div>
                    @empty
                        <p class="text-sm text-slate-500">Aucune alerte ouverte.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'history'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Historique de campagne</h2>
                <div class="mt-6 grid gap-4 lg:grid-cols-4">
                    <div class="rounded-2xl bg-jagMuted p-5">Période : {{ $program->cycle ?: 'À préciser' }}</div>
                    <div class="rounded-2xl bg-jagMuted p-5">Volumes livrés : {{ $program->delivered_volume ?: 0 }} t</div>
                    <div class="rounded-2xl bg-jagMuted p-5">Incidents : {{ $program->alerts->count() }}</div>
                    <div class="rounded-2xl bg-jagMuted p-5">Performance : {{ $program->quality_status ?: 'En suivi' }}</div>
                </div>
            </div>

            <div x-cloak x-show="tab === 'live'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Just Control Live</h2>
                <p class="mt-4 rounded-2xl bg-jagMuted p-5 text-sm leading-7 text-jagText">
                    {{ $program->just_control_live_enabled ? 'Option activée : visualisation du site ou bassin suivi.' : 'Option premium non activée pour ce programme.' }}
                </p>
            </div>
        </div>
    </section>
@else
    <div class="rounded-[2rem] bg-white p-8 text-center shadow-soft">Aucun programme industriel n’est encore rattaché à votre compte.</div>
@endif
@endsection
