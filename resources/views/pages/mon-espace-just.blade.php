@extends('layouts.app')

@section('title', 'Mon Espace Just | Just Agro Group')
@section('meta_description', 'Accédez à Mon Espace Just, la plateforme digitale sécurisée de Just Agro Group.')

@section('content')
<section class="relative overflow-hidden bg-jagNavy text-white">
    <div class="absolute inset-0 bg-[linear-gradient(135deg,rgba(13,33,55,0.97),rgba(10,61,46,0.90))]"></div>

    <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
        <div class="max-w-3xl">
            <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.22em] text-white/85">
                Mon Espace Just
            </span>

            <h1 class="mt-7 font-heading text-4xl font-extrabold leading-[1.08] sm:text-5xl">
                Un accès sécurisé selon votre profil
            </h1>

            <p class="mt-7 text-base leading-8 text-slate-200">
                Mon Espace Just centralise les informations essentielles de chaque projet dans un environnement sécurisé. Chaque client accède uniquement aux modules, documents et indicateurs utiles à son activité.
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
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-2">
            <article class="rounded-[2rem] border border-jagGreen/10 bg-white p-8 shadow-soft">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                    <x-icon name="leaf" class="h-7 w-7" />
                </div>
                <p class="mt-6 text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">Espace investisseur privé</p>
                <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy">Suivre un projet agricole sous gestion</h2>
                <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                    <li>• Vue du projet</li>
                    <li>• Rapports mensuels</li>
                    <li>• Dépenses</li>
                    <li>• Documents</li>
                    <li>• Alertes</li>
                    <li>• Suivi visuel selon option</li>
                </ul>
            </article>

            <article class="rounded-[2rem] border border-jagBlue/10 bg-white p-8 shadow-soft">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-jagBlue/10 text-jagBlue">
                    <x-icon name="factory" class="h-7 w-7" />
                </div>
                <p class="mt-6 text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">Espace industriel / transformateur</p>
                <h2 class="mt-3 font-heading text-3xl font-extrabold text-jagNavy">Suivre un programme d’approvisionnement</h2>
                <ul class="mt-6 space-y-3 text-sm leading-7 text-jagText">
                    <li>• Lettre d’intention (LOI) et contrats</li>
                    <li>• Volumes</li>
                    <li>• Planning de livraison</li>
                    <li>• Qualité</li>
                    <li>• Traçabilité</li>
                    <li>• Documentation</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="bg-jagMuted py-20 sm:py-24">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-8">
        <h2 class="font-heading text-3xl font-extrabold text-jagNavy sm:text-4xl">
            Les accès sont créés par l’administration Just Agro Group
        </h2>
        <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-jagText">
            Après ouverture de compte, chaque utilisateur est dirigé vers le tableau de bord adapté à son rôle : investisseur privé, industriel / transformateur, éditeur ou administrateur.
        </p>
    </div>
</section>
@endsection
