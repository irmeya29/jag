@extends('layouts.app')

@section('title', 'Actualités | Just Agro Group')
@section('meta_description', 'Articles, actualités et contenus de référence Just Agro Group.')

@section('content')
<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Actualités</p>
        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold sm:text-5xl">
            Articles, analyses et prises de parole
        </h1>
        <p class="mt-6 max-w-3xl text-base leading-8 text-slate-200">
            Cette section permet de publier des actualités JAG, des contenus sur l’agriculture contractuelle,
            les filières et les sujets d’investissement.
        </p>
    </div>
</section>

<section class="bg-jagMuted py-14">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        @php($categoryIcons = ['leaf', 'chart', 'document', 'target'])
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach (['Vie des projets', 'Notes d’analyse', 'Actualités JAG', 'Conseils pratiques'] as $rubrique)
                <div class="rounded-[2rem] bg-white p-6 shadow-soft">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-jagGreen/10 text-jagGreen">
                        <x-icon :name="$categoryIcons[$loop->index]" class="h-6 w-6" />
                    </div>
                    <h2 class="font-heading text-xl font-bold text-jagNavy">{{ $rubrique }}</h2>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
            @forelse ($posts as $post)
                <article class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-soft">
                    <a href="{{ route('blog.show', $post) }}" class="block h-56 bg-slate-200">
                        @if ($post->cover_image)
                            <img src="{{ asset('storage/' . $post->cover_image) }}"
                                 alt="{{ $post->title }}"
                                 class="h-full w-full object-cover">
                        @endif
                    </a>

                    <div class="p-6">
                        <div class="flex flex-wrap items-center gap-3 text-[11px] font-heading font-bold uppercase tracking-[0.16em]">
                            <span class="rounded-full bg-jagMuted px-3 py-2 text-jagBlue">
                                {{ $post->category?->name ?? 'Actualités JAG' }}
                            </span>
                            <span class="text-slate-500">
                                {{ optional($post->published_at)->translatedFormat('d M Y') }}
                            </span>
                        </div>

                        <h2 class="mt-5 font-heading text-2xl font-bold text-jagNavy">
                            <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                        </h2>

                        <p class="mt-4 text-sm leading-7 text-jagText">
                            {{ $post->excerpt }}
                        </p>

                        <a href="{{ route('blog.show', $post) }}"
                           class="mt-6 inline-flex text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagGreen">
                            Lire l’article
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full rounded-[2rem] border border-dashed border-slate-300 bg-jagMuted p-10 text-center text-sm text-slate-500">
                    Aucun article n’est encore publié.
                </div>
            @endforelse
        </div>

        <div class="mt-10">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection
