@extends('layouts.dashboard')

@section('title', ($post->exists ? 'Modifier' : 'Créer').' un article | Just Agro Group')
@section('heading', $post->exists ? 'Modifier un article' : 'Créer un article')

@section('content')
<form method="POST" action="{{ $post->exists ? route('admin.blog.update', $post) : route('admin.blog.store') }}" enctype="multipart/form-data" class="rounded-[2rem] bg-white p-8 shadow-soft">
    @csrf
    @if ($post->exists) @method('PUT') @endif

    @if ($errors->any())
        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">Merci de corriger les champs.</div>
    @endif

    <div class="grid gap-6 lg:grid-cols-2">
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Titre</span>
            <input name="title" value="{{ old('title', $post->title) }}" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Slug</span>
            <input name="slug" value="{{ old('slug', $post->slug) }}" placeholder="auto si vide" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Catégorie</span>
            <select name="blog_category_id" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected((int) old('blog_category_id', $post->blog_category_id) === $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
        </label>
        <label class="block">
            <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Image</span>
            <input type="file" name="cover_image" accept="image/*" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
        </label>
    </div>

    <label class="mt-6 block">
        <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Description / extrait</span>
        <textarea name="excerpt" rows="3" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">{{ old('excerpt', $post->excerpt) }}</textarea>
    </label>

    <label class="mt-6 block">
        <span class="text-xs font-heading font-bold uppercase tracking-[0.16em] text-slate-500">Contenu</span>
        <textarea name="content" rows="12" class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">{{ old('content', $post->content) }}</textarea>
    </label>

    <div class="mt-6 flex flex-wrap items-center gap-5">
        <label class="inline-flex items-center gap-3 text-sm font-semibold text-jagNavy">
            <input type="checkbox" name="is_published" value="1" @checked(old('is_published', $post->is_published))>
            Publier
        </label>
        <input type="datetime-local" name="published_at" value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\TH:i')) }}" class="rounded-2xl border border-slate-300 px-4 py-3 text-sm">
    </div>

    <button class="mt-8 rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">Enregistrer</button>
</form>
@endsection
