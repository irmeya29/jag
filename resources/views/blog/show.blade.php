@extends('layouts.app')

@section('title', $post->title . ' | Just Agro Group')
@section('meta_description', $post->excerpt ?: 'Article Just Agro Group')

@section('content')
<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">
        <div class="flex flex-wrap items-center gap-3 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-white/80">
            <span class="rounded-full border border-white/15 bg-white/10 px-3 py-2">
                {{ $post->category?->name ?? 'Actualités JAG' }}
            </span>
            <span>{{ optional($post->published_at)->translatedFormat('d M Y') }}</span>
        </div>

        <h1 class="mt-6 font-heading text-4xl font-extrabold sm:text-5xl">
            {{ $post->title }}
        </h1>

        @if ($post->excerpt)
            <p class="mt-6 text-base leading-8 text-slate-200">
                {{ $post->excerpt }}
            </p>
        @endif
    </div>
</section>

<section class="bg-white py-20 sm:py-24">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">
        @if ($post->cover_image)
            <div class="mb-12 overflow-hidden rounded-[2rem] bg-slate-200 shadow-soft">
                <img src="{{ asset('storage/' . $post->cover_image) }}"
                     alt="{{ $post->title }}"
                     class="h-full w-full object-cover">
            </div>
        @endif

        <article class="prose prose-lg max-w-none prose-headings:font-heading prose-headings:text-jagNavy prose-p:text-jagText prose-li:text-jagText">
            {!! nl2br(e($post->content)) !!}
        </article>

        <div class="mt-12 rounded-[2rem] bg-jagMuted p-8">
            <h2 class="font-heading text-2xl font-extrabold text-jagNavy">Partager cet article</h2>
            <div class="mt-6 flex flex-wrap gap-3 text-sm">
                <a href="#" class="rounded-full bg-white px-4 py-3 text-jagNavy shadow-soft">LinkedIn</a>
                <a href="#" class="rounded-full bg-white px-4 py-3 text-jagNavy shadow-soft">Facebook</a>
                <a href="#" class="rounded-full bg-white px-4 py-3 text-jagNavy shadow-soft">WhatsApp</a>
            </div>
        </div>
    </div>
</section>
@endsection