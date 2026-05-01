@extends('layouts.dashboard')

@section('title', 'Espace investisseur | Just Agro Group')
@section('heading', 'Espace investisseur privé')

@section('content')
@if ($project)
    <section class="rounded-[2rem] bg-white p-8 shadow-soft">
        <div class="grid gap-4 lg:grid-cols-6">
            @foreach ([
                'Nom du projet' => $project->name,
                'Localisation' => $project->location ?: 'À préciser',
                'Superficie' => $project->surface_hectare ? $project->surface_hectare.' ha' : 'À préciser',
                'Culture(s)' => collect($project->cultures)->join(', ') ?: 'À préciser',
                'Cycle en cours' => $project->cycle ?: 'À préciser',
                'Statut global' => str_replace('_', ' ', $project->status),
            ] as $label => $value)
                <div class="rounded-2xl bg-jagMuted p-4">
                    <div class="text-[10px] font-heading font-bold uppercase tracking-[0.16em] text-slate-500">{{ $label }}</div>
                    <div class="mt-2 text-sm font-semibold text-jagNavy">{{ $value }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mt-8 grid gap-6 lg:grid-cols-4">
        <div class="rounded-[2rem] bg-white p-6 shadow-soft">
            <div class="text-sm text-slate-500">État du projet</div>
            <div class="mt-3 font-heading text-2xl font-extrabold text-jagNavy">{{ str_replace('_', ' ', $project->status) }}</div>
        </div>
        <div class="rounded-[2rem] bg-white p-6 shadow-soft">
            <div class="text-sm text-slate-500">Budget & dépenses</div>
            <div class="mt-3 font-heading text-2xl font-extrabold text-jagGreen">{{ number_format((float) $project->budget_spent, 0, ',', ' ') }} FCFA</div>
            <div class="mt-2 text-xs text-slate-500">Prévu : {{ number_format((float) $project->budget_planned, 0, ',', ' ') }} FCFA</div>
        </div>
        <div class="rounded-[2rem] bg-white p-6 shadow-soft">
            <div class="text-sm text-slate-500">Rapport du mois</div>
            <div class="mt-3 font-heading text-2xl font-extrabold text-jagBlue">{{ $project->reports->first()?->period ?? 'Non publié' }}</div>
        </div>
        <div class="rounded-[2rem] bg-white p-6 shadow-soft">
            <div class="text-sm text-slate-500">Alertes / recommandations</div>
            <div class="mt-3 font-heading text-2xl font-extrabold text-jagOrange">{{ $project->alerts->whereNull('resolved_at')->count() }}</div>
        </div>
    </section>

    <section x-data="{ tab: 'overview' }" class="mt-8 rounded-[2rem] bg-white p-6 shadow-soft">
        <div class="flex gap-2 overflow-x-auto pb-2">
            @foreach ([
                'overview' => 'Vue d’ensemble',
                'parcels' => 'Parcelles',
                'calendar' => 'Calendrier',
                'expenses' => 'Dépenses',
                'reports' => 'Rapports',
                'documents' => 'Documents',
                'alerts' => 'Incidents',
                'sales' => 'Commercialisation',
                'live' => 'Just Control Live',
            ] as $key => $label)
                <button @click="tab = '{{ $key }}'" :class="tab === '{{ $key }}' ? 'bg-jagNavy text-white' : 'bg-jagMuted text-jagNavy'" class="shrink-0 rounded-full px-4 py-3 text-xs font-heading font-bold uppercase tracking-[0.14em]">{{ $label }}</button>
            @endforeach
        </div>

        <div class="mt-8">
            <div x-show="tab === 'overview'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Vue d’ensemble</h2>
                <div class="mt-6 grid gap-4 lg:grid-cols-4">
                    <div class="rounded-2xl bg-jagMuted p-5"><div class="text-xs text-slate-500">Résumé</div><p class="mt-2 text-sm leading-7">{{ $project->summary ?: 'À renseigner.' }}</p></div>
                    <div class="rounded-2xl bg-jagMuted p-5"><div class="text-xs text-slate-500">Phase actuelle</div><p class="mt-2 font-semibold text-jagNavy">{{ str_replace('_', ' ', $project->status) }}</p></div>
                    <div class="rounded-2xl bg-jagMuted p-5"><div class="text-xs text-slate-500">Objectif de campagne</div><p class="mt-2 text-sm leading-7">{{ $project->objective ?: 'À renseigner.' }}</p></div>
                    <div class="rounded-2xl bg-jagMuted p-5"><div class="text-xs text-slate-500">Indicateurs clés</div><p class="mt-2 text-sm">{{ $project->parcels->count() }} parcelle(s), {{ $project->reports->count() }} rapport(s)</p></div>
                </div>
            </div>

            <div x-cloak x-show="tab === 'parcels'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Parcelles / site</h2>
                <div class="mt-6 grid gap-4 lg:grid-cols-3">
                    @forelse ($project->parcels as $parcel)
                        <div class="rounded-2xl border border-slate-200 p-5">
                            <div class="font-semibold text-jagNavy">{{ $parcel->name }}</div>
                            <p class="mt-2 text-sm text-jagText">{{ $parcel->surface_hectare }} ha — {{ $parcel->culture }} — {{ $parcel->status }}</p>
                            <p class="mt-2 text-sm text-slate-500">{{ $parcel->notes }}</p>
                        </div>
                    @empty
                        <p class="text-sm text-slate-500">Aucune parcelle renseignée.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'calendar'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Calendrier cultural</h2>
                <div class="mt-6 space-y-3">
                    @forelse ($project->tasks as $task)
                        <div class="rounded-2xl border border-slate-200 p-5"><span class="font-semibold text-jagNavy">{{ $task->title }}</span><span class="ml-3 text-sm text-jagText">{{ $task->status }} — {{ optional($task->planned_at)->format('d/m/Y') }}</span></div>
                    @empty
                        <p class="text-sm text-slate-500">Aucune tâche planifiée.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'expenses'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Dépenses & budget</h2>
                <div class="mt-6 space-y-3">
                    @forelse ($project->expenses as $expense)
                        <div class="rounded-2xl border border-slate-200 p-5"><span class="font-semibold text-jagNavy">{{ $expense->label }}</span><span class="ml-3 text-sm text-jagText">{{ number_format((float) $expense->amount, 0, ',', ' ') }} FCFA — {{ $expense->category }}</span></div>
                    @empty
                        <p class="text-sm text-slate-500">Aucune dépense renseignée.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'reports'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Rapports mensuels</h2>
                <div class="mt-6 space-y-3">
                    @forelse ($project->reports as $report)
                        <div class="rounded-2xl border border-slate-200 p-5"><span class="font-semibold text-jagNavy">{{ $report->title }}</span><p class="mt-2 text-sm text-jagText">{{ $report->period }} — {{ $report->summary }}</p></div>
                    @empty
                        <p class="text-sm text-slate-500">Aucun rapport publié.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'documents'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Documents</h2>
                <div class="mt-6 grid gap-3 lg:grid-cols-2">
                    @forelse ($project->documents as $document)
                        <div class="rounded-2xl border border-slate-200 p-5">{{ $document->type }} — <span class="font-semibold text-jagNavy">{{ $document->title }}</span></div>
                    @empty
                        <p class="text-sm text-slate-500">Aucun document disponible.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'alerts'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Incidents & mesures correctives</h2>
                <div class="mt-6 space-y-3">
                    @forelse ($project->alerts as $alert)
                        <div class="rounded-2xl border border-slate-200 p-5"><span class="font-semibold text-jagNavy">{{ $alert->title }}</span><p class="mt-2 text-sm text-jagText">{{ $alert->message }}</p><p class="mt-2 text-sm text-jagOrange">{{ $alert->recommendation }}</p></div>
                    @empty
                        <p class="text-sm text-slate-500">Aucun incident signalé.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'sales'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Commercialisation</h2>
                <div class="mt-6 space-y-3">
                    @forelse ($project->commercializations as $sale)
                        <div class="rounded-2xl border border-slate-200 p-5">{{ $sale->harvest_status }} — {{ $sale->outlet }} — {{ number_format((float) $sale->sales_amount, 0, ',', ' ') }} FCFA</div>
                    @empty
                        <p class="text-sm text-slate-500">Aucune donnée de commercialisation renseignée.</p>
                    @endforelse
                </div>
            </div>

            <div x-cloak x-show="tab === 'live'">
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Just Control Live</h2>
                <p class="mt-4 rounded-2xl bg-jagMuted p-5 text-sm leading-7 text-jagText">
                    {{ $project->just_control_live_enabled ? 'Option activée : le module pourra afficher le flux visuel sécurisé du site.' : 'Option non activée pour ce projet.' }}
                </p>
            </div>
        </div>
    </section>
@else
    <div class="rounded-[2rem] bg-white p-8 text-center shadow-soft">Aucun projet investisseur n’est encore rattaché à votre compte.</div>
@endif
@endsection
