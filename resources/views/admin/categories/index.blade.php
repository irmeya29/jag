@extends('layouts.dashboard')

@section('title', 'Categories | Just Agro Group')
@section('heading', 'Categories')

@section('content')
@include('admin.partials.form-errors')

<div class="rounded-[2rem] bg-white p-6 shadow-soft">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Categories d'articles</h2>
            <p class="mt-2 text-sm text-jagText">Organisez les articles publics par rubrique.</p>
        </div>
        <a href="{{ route('admin.categories.create') }}" class="inline-flex justify-center rounded-full bg-jagGreen px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Nouvelle categorie</a>
    </div>

    <div class="mt-6 space-y-3">
        @forelse ($categories as $category)
            <div class="grid gap-4 rounded-2xl border border-slate-200 p-5 lg:grid-cols-[1fr_auto]">
                <div>
                    <div class="font-semibold text-jagNavy">{{ $category->name }}</div>
                    <div class="mt-1 text-sm text-jagText">{{ $category->posts_count }} article{{ $category->posts_count > 1 ? 's' : '' }}</div>
                    <div class="mt-1 text-xs text-slate-500">/{{ $category->slug }}</div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <a href="{{ route('admin.categories.edit', $category) }}" class="rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-jagNavy">Modifier</a>
                    <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" onsubmit="return confirm('Supprimer cette categorie ?')">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-full bg-red-50 px-4 py-2 text-xs font-semibold text-red-700">Supprimer</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-sm text-slate-500">Aucune categorie.</p>
        @endforelse
    </div>

    <div class="mt-6">{{ $categories->links() }}</div>
</div>
@endsection
