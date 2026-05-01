@php
    $navLink = 'text-sm font-semibold text-slate-700 transition hover:text-jagGreen';
    $navLinkActive = 'text-jagGreen';

    $mobileLink = 'block rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 transition hover:bg-jagMuted hover:text-jagGreen';
@endphp

<header
    x-data="{ open: false, polesOpen: false }"
    class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur"
>
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-3 sm:px-6 lg:px-8">

        {{-- Logo seul --}}
        <a href="{{ route('home') }}" class="flex items-center">
            <img
                src="{{ asset('assets/images/logo.png') }}"
                alt="Just Agro Group"
                class="h-16 w-auto object-contain"
                loading="eager"
            >
        </a>

        {{-- Menu desktop --}}
        <nav class="hidden items-center gap-7 lg:flex">
            <a
                href="{{ route('home') }}"
                class="{{ $navLink }} {{ request()->routeIs('home') ? $navLinkActive : '' }}"
            >
                Accueil
            </a>

            {{-- Dropdown simple --}}
            <div class="group relative">
                <button
                    type="button"
                    class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-700 transition hover:text-jagGreen focus:outline-none"
                >
                    Nos Pôles
                    <svg
                        class="h-4 w-4 text-slate-400 transition group-hover:rotate-180 group-hover:text-jagGreen"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </button>

                <div class="pointer-events-none absolute left-0 top-full z-50 pt-3 opacity-0 transition group-hover:pointer-events-auto group-hover:opacity-100 group-focus-within:pointer-events-auto group-focus-within:opacity-100">
                    <div class="w-80 rounded-xl border border-slate-200 bg-white p-2 shadow-lg">
                        <a
                            href="{{ route('pole-1') }}"
                            class="block rounded-lg px-4 py-3 text-sm font-semibold text-jagNavy transition hover:bg-jagMuted hover:text-jagGreen"
                        >
                            Pôle 1 — Maîtrise d’Ouvrage Agricole
                        </a>

                        <a
                            href="{{ route('pole-2') }}"
                            class="block rounded-lg px-4 py-3 text-sm font-semibold text-jagNavy transition hover:bg-jagMuted hover:text-jagBlue"
                        >
                            Pôle 2 — Fournisseur Industriel
                        </a>
                    </div>
                </div>
            </div>

            <a
                href="{{ route('processus') }}"
                class="{{ $navLink }} {{ request()->routeIs('processus') ? $navLinkActive : '' }}"
            >
                Notre Processus
            </a>

            <a
                href="{{ route('portfolio.index') }}"
                class="{{ $navLink }} {{ request()->routeIs('portfolio.*') ? $navLinkActive : '' }}"
            >
                Réalisations
            </a>

            <a
                href="{{ route('blog.index') }}"
                class="{{ $navLink }} {{ request()->routeIs('blog.*') ? $navLinkActive : '' }}"
            >
                Actualités
            </a>

            <a
                href="{{ route('contact.create') }}"
                class="{{ $navLink }} {{ request()->routeIs('contact.*') ? $navLinkActive : '' }}"
            >
                Contact
            </a>
        </nav>

        {{-- CTA desktop --}}
        <div class="hidden lg:block">
            <a
                href="{{ route('mon-espace-just') }}"
                class="inline-flex items-center justify-center rounded-full bg-jagOrange px-5 py-3 text-xs font-heading font-extrabold uppercase tracking-[0.14em] text-white transition hover:bg-jagGreen"
            >
                Mon Espace Just
            </a>
        </div>

        {{-- Bouton mobile --}}
        <button
            type="button"
            @click="open = !open"
            class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-jagNavy lg:hidden"
            :aria-expanded="open.toString()"
            aria-label="Ouvrir le menu"
        >
            <svg
                x-show="!open"
                x-cloak
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
            >
                <path d="M4 7h16" />
                <path d="M4 12h16" />
                <path d="M4 17h16" />
            </svg>

            <svg
                x-show="open"
                x-cloak
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
            >
                <path d="M6 6l12 12" />
                <path d="M18 6L6 18" />
            </svg>
        </button>
    </div>

    {{-- Menu mobile --}}
    <div
        x-cloak
        x-show="open"
        x-transition.opacity
        class="border-t border-slate-200 bg-white lg:hidden"
    >
        <div class="space-y-2 px-5 py-5">
            <a href="{{ route('home') }}" class="{{ $mobileLink }}">
                Accueil
            </a>

            <div class="rounded-xl border border-slate-200 bg-white">
                <button
                    type="button"
                    @click="polesOpen = !polesOpen"
                    class="flex w-full items-center justify-between px-4 py-3 text-left text-sm font-bold text-jagNavy"
                >
                    Nos Pôles
                    <span class="text-lg leading-none text-slate-400" x-text="polesOpen ? '−' : '+'"></span>
                </button>

                <div
                    x-cloak
                    x-show="polesOpen"
                    x-transition
                    class="space-y-1 border-t border-slate-100 p-2"
                >
                    <a
                        href="{{ route('pole-1') }}"
                        class="block rounded-lg px-4 py-3 text-sm font-semibold text-jagNavy transition hover:bg-jagMuted hover:text-jagGreen"
                    >
                        Pôle 1 — Maîtrise d’Ouvrage Agricole
                    </a>

                    <a
                        href="{{ route('pole-2') }}"
                        class="block rounded-lg px-4 py-3 text-sm font-semibold text-jagNavy transition hover:bg-jagMuted hover:text-jagBlue"
                    >
                        Pôle 2 — Fournisseur Industriel
                    </a>
                </div>
            </div>

            <a href="{{ route('processus') }}" class="{{ $mobileLink }}">
                Notre Processus
            </a>

            <a href="{{ route('portfolio.index') }}" class="{{ $mobileLink }}">
                Réalisations
            </a>

            <a href="{{ route('blog.index') }}" class="{{ $mobileLink }}">
                Actualités
            </a>

            <a href="{{ route('contact.create') }}" class="{{ $mobileLink }}">
                Contact
            </a>

            <a
                href="{{ route('mon-espace-just') }}"
                class="mt-4 flex items-center justify-center rounded-full bg-jagOrange px-5 py-3 text-xs font-heading font-extrabold uppercase tracking-[0.14em] text-white"
            >
                Mon Espace Just
            </a>
        </div>
    </div>
</header>