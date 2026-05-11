@extends('layouts.app')

@section('title', 'Articles | Just Agro Group')
@section('meta_description', 'Articles et actualites de Just Agro Group.')

@section('content')
<section class="bg-jagNavy py-16 text-white sm:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Articles</p>
                <h1 class="mt-4 font-heading text-4xl font-extrabold sm:text-5xl">Actualites & analyses</h1>
            </div>
            <p class="max-w-xl text-sm leading-7 text-slate-200">
                Retrouvez les contenus JAG par categorie, sans détour.
            </p>
        </div>
    </div>
</section>

<section class="bg-white py-16 sm:py-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[280px_1fr] lg:px-8">
        <aside class="lg:sticky lg:top-24 lg:self-start">
            <div class="rounded-[1.5rem] border border-slate-200 bg-jagMuted p-5">
                <h2 class="font-heading text-lg font-extrabold text-jagNavy">Categories</h2>

                <div class="mt-5 space-y-2">
                    <a href="{{ route('blog.index') }}"
                       class="flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-semibold transition {{ $selectedCategory ? 'bg-white text-jagNavy hover:bg-white/70' : 'bg-jagGreen text-white' }}">
                        <span>Tous les articles</span>
                        <span>{{ $categories->sum('posts_count') }}</span>
                    </a>

                    @foreach ($categories as $category)
                        <a href="{{ route('blog.index', ['categorie' => $category->slug]) }}"
                           class="flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-semibold transition {{ $selectedCategory?->is($category) ? 'bg-jagGreen text-white' : 'bg-white text-jagNavy hover:bg-white/70' }}">
                            <span>{{ $category->name }}</span>
                            <span>{{ $category->posts_count }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </aside>

        <div>
            <div class="mb-8 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagBlue">
                        {{ $selectedCategory?->name ?? 'Tous les articles' }}
                    </p>
                    <h2 class="mt-2 font-heading text-3xl font-extrabold text-jagNavy">
                        {{ $posts->total() }} publication{{ $posts->total() > 1 ? 's' : '' }}
                    </h2>
                </div>

                @if ($selectedCategory)
                    <a href="{{ route('blog.index') }}" class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagOrange">
                        Retirer le filtre
                    </a>
                @endif
            </div>

            <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
                @forelse ($posts as $post)
                    <article class="overflow-hidden rounded-[1.5rem] border border-slate-200 bg-white shadow-soft">
                        <a href="{{ route('blog.show', $post) }}" class="block h-52 bg-slate-200">
                            @if ($post->cover_image)
                                <img src="{{ asset('storage/' . $post->cover_image) }}"
                                     alt="{{ $post->title }}"
                                     class="h-full w-full object-cover">
                            @else
                                <div class="flex h-full w-full items-center justify-center bg-jagMuted text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-400">
                                    Image
                                </div>
                            @endif
                        </a>

                        <div class="p-6">
                            <div class="flex flex-wrap items-center gap-3 text-[11px] font-heading font-bold uppercase tracking-[0.16em]">
                                <span class="rounded-full bg-jagMuted px-3 py-2 text-jagBlue">
                                    {{ $post->category?->name ?? 'Actualites JAG' }}
                                </span>
                                <span class="text-slate-500">
                                    {{ optional($post->published_at)->translatedFormat('d M Y') }}
                                </span>
                            </div>

                            <h3 class="mt-5 font-heading text-xl font-bold leading-snug text-jagNavy">
                                <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                            </h3>

                            @if ($post->excerpt)
                                <p class="mt-4 text-sm leading-7 text-jagText">
                                    {{ $post->excerpt }}
                                </p>
                            @endif

                            <a href="{{ route('blog.show', $post) }}"
                               class="mt-6 inline-flex text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">
                                Lire l'article
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="rounded-[1.5rem] border border-dashed border-slate-300 bg-jagMuted p-10 text-center text-sm text-slate-500 md:col-span-2 xl:col-span-3">
                        Aucun article dans cette categorie.
                    </div>
                @endforelse
            </div>

            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
