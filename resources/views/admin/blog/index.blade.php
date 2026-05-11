@extends('layouts.dashboard')

@section('title', 'Articles | Just Agro Group')
@section('heading', 'Articles')

@section('content')
<div class="rounded-[2rem] bg-white p-6 shadow-soft">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Gestion des articles</h2>
            <p class="mt-2 text-sm text-jagText">Creez, illustrez et publiez les contenus du blog.</p>
        </div>
        <a href="{{ route('admin.blog.create') }}" class="inline-flex justify-center rounded-full bg-jagGreen px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Nouvel article</a>
    </div>

    <div class="mt-6 space-y-3">
        @forelse ($posts as $post)
            <div class="grid gap-4 rounded-2xl border border-slate-200 p-4 lg:grid-cols-[120px_1fr_auto] lg:items-center">
                <div class="h-24 overflow-hidden rounded-2xl bg-slate-100">
                    @if ($post->cover_image)
                        <img src="{{ asset('storage/' . $post->cover_image) }}" alt="{{ $post->title }}" class="h-full w-full object-cover">
                    @else
                        <div class="flex h-full w-full items-center justify-center text-xs font-semibold uppercase tracking-[0.14em] text-slate-400">Image</div>
                    @endif
                </div>
                <div>
                    <div class="font-semibold text-jagNavy">{{ $post->title }}</div>
                    <div class="mt-1 text-sm text-jagText">{{ $post->category?->name }} - {{ $post->is_published ? 'Publie' : 'Brouillon' }}</div>
                    <div class="mt-1 text-xs text-slate-500">/{{ $post->slug }}</div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    @if ($post->is_published)
                        <a href="{{ route('blog.show', $post) }}" class="rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-jagNavy">Voir</a>
                    @endif
                    <a href="{{ route('admin.blog.edit', $post) }}" class="rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-jagNavy">Modifier</a>
                    <form method="POST" action="{{ route('admin.blog.destroy', $post) }}" onsubmit="return confirm('Supprimer cet article ?')">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-full bg-red-50 px-4 py-2 text-xs font-semibold text-red-700">Supprimer</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-sm text-slate-500">Aucun article.</p>
        @endforelse
    </div>

    <div class="mt-6">{{ $posts->links() }}</div>
</div>
@endsection
