@extends('layouts.dashboard')

@section('title', 'Editeur | Just Agro Group')
@section('heading', 'Espace editeur')

@section('content')
<div class="grid gap-6 lg:grid-cols-2">
    <div class="rounded-[2rem] bg-white p-8 shadow-soft">
        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Articles</h2>
        <p class="mt-4 text-sm leading-7 text-jagText">Preparer, relire et publier les contenus Actualites JAG.</p>
        <div class="mt-6 flex flex-wrap gap-3">
            <a href="{{ route('admin.blog.create') }}" class="inline-flex rounded-full bg-jagGreen px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Nouvel article</a>
            <a href="{{ route('admin.blog.index') }}" class="inline-flex rounded-full border border-slate-200 px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagNavy">Gerer</a>
            <a href="{{ route('admin.categories.index') }}" class="inline-flex rounded-full border border-slate-200 px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagNavy">Categories</a>
        </div>
    </div>
    <div class="rounded-[2rem] bg-white p-8 shadow-soft">
        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Realisations</h2>
        <p class="mt-4 text-sm leading-7 text-jagText">Suivre les dossiers publiables et les realisations structurees par pole.</p>
        <div class="mt-6 flex flex-wrap gap-3">
            <a href="{{ route('admin.portfolio.create') }}" class="inline-flex rounded-full bg-jagBlue px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Nouvelle realisation</a>
            <a href="{{ route('admin.portfolio.index') }}" class="inline-flex rounded-full border border-slate-200 px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagNavy">Gerer</a>
        </div>
    </div>
</div>
@endsection
