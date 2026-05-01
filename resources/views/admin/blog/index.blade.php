@extends('layouts.dashboard')

@section('title', 'Articles | Just Agro Group')
@section('heading', 'Articles')

@section('content')
<div class="rounded-[2rem] bg-white p-6 shadow-soft">
    <div class="flex items-center justify-between gap-4">
        <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Gestion des articles</h2>
        <a href="{{ route('admin.blog.create') }}" class="rounded-full bg-jagGreen px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Nouvel article</a>
    </div>

    <div class="mt-6 space-y-3">
        @forelse ($posts as $post)
            <div class="grid gap-4 rounded-2xl border border-slate-200 p-5 lg:grid-cols-[1fr_auto]">
                <div>
                    <div class="font-semibold text-jagNavy">{{ $post->title }}</div>
                    <div class="mt-1 text-sm text-jagText">{{ $post->category?->name }} — {{ $post->is_published ? 'Publié' : 'Brouillon' }}</div>
                    <div class="mt-1 text-xs text-slate-500">/{{ $post->slug }}</div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
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
