<header x-data="{ open: false, poles: false }" class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <div class="flex h-11 w-11 items-center justify-center rounded-full bg-jagGreen text-sm font-heading font-bold text-white">JAG</div>
            <div>
                <div class="font-heading text-sm font-extrabold uppercase tracking-[0.18em] text-jagNavy">Just Agro Group</div>
                <div class="text-xs text-slate-500">Produire avec exigence</div>
            </div>
        </a>

        <nav class="hidden items-center gap-8 lg:flex">
            <a href="{{ route('home') }}" class="text-sm font-semibold text-slate-700 hover:text-jagGreen">Accueil</a>

            <div class="relative" @mouseenter="poles = true" @mouseleave="poles = false">
                <button class="text-sm font-semibold text-slate-700 hover:text-jagGreen">Nos Pôles</button>
                <div x-show="poles" x-transition class="absolute left-0 mt-3 w-72 rounded-2xl border border-slate-200 bg-white p-3 shadow-soft">
                    <a href="{{ route('pole-1') }}" class="block rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-jagMuted hover:text-jagGreen">Pôle 1 — MOA</a>
                    <a href="{{ route('pole-2') }}" class="mt-2 block rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-jagMuted hover:text-jagBlue">Pôle 2 — Fournisseur Industriel</a>
                </div>
            </div>

            <a href="{{ route('processus') }}" class="text-sm font-semibold text-slate-700 hover:text-jagGreen">Notre Processus</a>
            <a href="{{ route('portfolio.index') }}" class="text-sm font-semibold text-slate-700 hover:text-jagGreen">Réalisations</a>
            <a href="{{ route('blog.index') }}" class="text-sm font-semibold text-slate-700 hover:text-jagGreen">Actualités</a>
            <a href="{{ route('contact.create') }}" class="text-sm font-semibold text-slate-700 hover:text-jagGreen">Contact</a>
        </nav>

        <div class="hidden lg:block">
            <a href="{{ route('mon-espace-just') }}" class="inline-flex items-center rounded-full bg-jagOrange px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white transition hover:opacity-90">
                Mon Espace Just
            </a>
        </div>

        <button @click="open = !open" class="inline-flex items-center rounded-xl border border-slate-200 p-3 text-slate-700 lg:hidden">
            <span class="sr-only">Ouvrir le menu</span>
            ☰
        </button>
    </div>

    <div x-show="open" x-transition class="border-t border-slate-200 bg-white lg:hidden">
        <div class="space-y-2 px-6 py-5">
            <a href="{{ route('home') }}" class="block rounded-xl px-4 py-3 font-semibold hover:bg-jagMuted">Accueil</a>
            <a href="{{ route('pole-1') }}" class="block rounded-xl px-4 py-3 font-semibold hover:bg-jagMuted">Pôle 1 — MOA</a>
            <a href="{{ route('pole-2') }}" class="block rounded-xl px-4 py-3 font-semibold hover:bg-jagMuted">Pôle 2 — Fournisseur Industriel</a>
            <a href="{{ route('processus') }}" class="block rounded-xl px-4 py-3 font-semibold hover:bg-jagMuted">Notre Processus</a>
            <a href="{{ route('portfolio.index') }}" class="block rounded-xl px-4 py-3 font-semibold hover:bg-jagMuted">Réalisations</a>
            <a href="{{ route('blog.index') }}" class="block rounded-xl px-4 py-3 font-semibold hover:bg-jagMuted">Actualités</a>
            <a href="{{ route('contact.create') }}" class="block rounded-xl px-4 py-3 font-semibold hover:bg-jagMuted">Contact</a>
            <a href="{{ route('mon-espace-just') }}" class="mt-3 inline-flex rounded-full bg-jagOrange px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">Mon Espace Just</a>
        </div>
    </div>
</header>