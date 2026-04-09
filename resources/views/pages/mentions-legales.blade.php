@extends('layouts.app')

@section('title', 'Mentions légales | Just Agro Group')
@section('meta_description', 'Mentions légales et informations générales du site Just Agro Group.')

@section('content')
<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Mentions légales</p>
        <h1 class="mt-4 font-heading text-4xl font-extrabold sm:text-5xl">
            Informations légales et confidentialité
        </h1>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">
        <div class="space-y-10 rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
            <section>
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Éditeur du site</h2>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Just Agro Group<br>
                    Koudougou, Burkina Faso<br>
                    Email : justagrogroup@gmail.com<br>
                    Téléphone : +226 54 12 62 99 / +226 72 84 10 89
                </p>
            </section>

            <section>
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Objet du site</h2>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Le site présente les activités institutionnelles de Just Agro Group, ses pôles,
                    ses réalisations, ses actualités et sa plateforme Mon Espace Just.
                </p>
            </section>

            <section>
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Données personnelles</h2>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Les données transmises via les formulaires de contact sont utilisées uniquement
                    dans le cadre du traitement des demandes adressées à Just Agro Group.
                </p>
            </section>

            <section>
                <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Cookies</h2>
                <p class="mt-4 text-sm leading-7 text-jagText">
                    Le site peut utiliser des cookies strictement nécessaires à son bon fonctionnement
                    ainsi qu’à des mesures d’audience selon la configuration retenue en production.
                </p>
            </section>
        </div>
    </div>
</section>
@endsection