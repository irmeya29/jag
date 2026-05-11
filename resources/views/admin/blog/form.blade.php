@extends('layouts.dashboard')

@section('title', ($post->exists ? 'Modifier' : 'Creer').' un article | Just Agro Group')
@section('heading', $post->exists ? 'Modifier un article' : 'Creer un article')

@section('content')
<form method="POST" action="{{ $post->exists ? route('admin.blog.update', $post) : route('admin.blog.store') }}" enctype="multipart/form-data" class="rounded-[2rem] bg-white p-8 shadow-soft">
    @csrf
    @if ($post->exists) @method('PUT') @endif

    @include('admin.partials.form-errors')

    <div class="grid gap-6 lg:grid-cols-2">
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Titre</span>
            <input name="title" value="{{ old('title', $post->title) }}" class="mt-2 w-full rounded-2xl border @error('title') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('title')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Slug</span>
            <input name="slug" value="{{ old('slug', $post->slug) }}" placeholder="auto si vide" class="mt-2 w-full rounded-2xl border @error('slug') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('slug')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>

        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Categorie</span>
            <select name="blog_category_id" class="mt-2 w-full rounded-2xl border @error('blog_category_id') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
                <option value="">Choisir une categorie</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected((int) old('blog_category_id', $post->blog_category_id) === $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('blog_category_id')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </label>

        <div>
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Image mise en avant</span>
            @if ($post->cover_image)
                <img src="{{ asset('storage/' . $post->cover_image) }}" alt="{{ $post->title }}" class="mt-2 h-32 w-full rounded-2xl object-cover">
            @endif
            <input type="file" name="cover_image" accept="image/*" class="mt-2 w-full rounded-2xl border @error('cover_image') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('cover_image')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <label class="mt-6 block">
        <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Description / extrait</span>
        <textarea name="excerpt" rows="3" class="mt-2 w-full rounded-2xl border @error('excerpt') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">{{ old('excerpt', $post->excerpt) }}</textarea>
        @error('excerpt')
            <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
        @enderror
    </label>

    <label class="mt-6 block">
        <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Contenu</span>
        <textarea name="content" rows="12" class="mt-2 w-full rounded-2xl border @error('content') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">{{ old('content', $post->content) }}</textarea>
        @error('content')
            <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
        @enderror
    </label>

    <div class="mt-6 flex flex-wrap items-start gap-5">
        <label class="inline-flex items-center gap-3 pt-3 text-sm font-semibold text-jagNavy">
            <input type="checkbox" name="is_published" value="1" @checked(old('is_published', $post->is_published))>
            Publier
        </label>
        <div>
            <input type="datetime-local" name="published_at" value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\TH:i')) }}" class="rounded-2xl border @error('published_at') border-red-400 @else border-slate-300 @enderror px-4 py-3 text-sm">
            @error('published_at')
                <span class="mt-2 block text-xs font-semibold text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mt-8 flex flex-wrap items-center gap-3">
        <button class="rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">Enregistrer</button>
        <a href="{{ route('admin.blog.index') }}" class="rounded-full border border-slate-200 px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-jagNavy">Annuler</a>
    </div>
</form>
@endsection
