@extends('layouts.dashboard')

@section('title', 'Éditeur | Just Agro Group')
@section('heading', 'Espace éditeur')

@section('content')
<div class="grid gap-6 lg:grid-cols-2">
    <div class="rounded-[2rem] bg-white p-8 shadow-soft">
        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Articles</h2>
        <p class="mt-4 text-sm leading-7 text-jagText">Préparer, relire et publier les contenus Actualités JAG.</p>
        <a href="{{ route('admin.blog.index') }}" class="mt-6 inline-flex rounded-full bg-jagGreen px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Gérer les articles</a>
    </div>
    <div class="rounded-[2rem] bg-white p-8 shadow-soft">
        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Réalisations</h2>
        <p class="mt-4 text-sm leading-7 text-jagText">Suivre les dossiers publiables et les réalisations structurées par pôle.</p>
        <a href="{{ route('admin.portfolio.index') }}" class="mt-6 inline-flex rounded-full bg-jagBlue px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Gérer les réalisations</a>
    </div>
</div>
@endsection
