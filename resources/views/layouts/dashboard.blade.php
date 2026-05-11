<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard | Just Agro Group')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        jagGreen: '#2EAA63',
                        jagBlue: '#1E9BD7',
                        jagNavy: '#0D2137',
                        jagOrange: '#FF6B35',
                        jagText: '#555555',
                        jagMuted: '#F7F8FC',
                    },
                    fontFamily: {
                        heading: ['Montserrat', 'sans-serif'],
                        body: ['Open Sans', 'sans-serif'],
                    },
                    boxShadow: {
                        soft: '0 20px 40px rgba(13,33,55,0.08)',
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>[x-cloak] { display: none !important; }</style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-jagMuted font-body text-jagText antialiased">
    <div class="min-h-screen lg:flex">
        <aside class="bg-jagNavy px-6 py-6 text-white lg:fixed lg:inset-y-0 lg:w-72">
            <a href="{{ auth()->user()->isAdmin() || auth()->user()->isEditeur() ? route('admin.dashboard') : route('dashboard') }}" class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-jagGreen font-heading text-sm font-extrabold">JAG</div>
                <div>
                    <div class="font-heading text-sm font-extrabold uppercase tracking-[0.18em]">Just Agro Group</div>
                    <div class="text-xs text-slate-400">Mon Espace Just</div>
                </div>
            </a>

            <nav class="mt-10 space-y-2 text-sm">
                <a href="{{ auth()->user()->isAdmin() || auth()->user()->isEditeur() ? route('admin.dashboard') : route('dashboard') }}" class="block rounded-2xl px-4 py-3 font-semibold transition hover:bg-white/10">Tableau de bord</a>

                @if (auth()->user()->isAdmin())
                    <a href="{{ route('admin.access.index') }}" class="block rounded-2xl px-4 py-3 font-semibold transition hover:bg-white/10">Accès & rôles</a>
                    <a href="{{ route('admin.leads.index') }}" class="block rounded-2xl px-4 py-3 font-semibold transition hover:bg-white/10">Demandes</a>
                    <a href="{{ route('admin.blog.index') }}" class="block rounded-2xl px-4 py-3 font-semibold transition hover:bg-white/10">Articles</a>
                    <a href="{{ route('admin.categories.index') }}" class="block rounded-2xl px-4 py-3 font-semibold transition hover:bg-white/10">Categories</a>
                    <a href="{{ route('admin.portfolio.index') }}" class="block rounded-2xl px-4 py-3 font-semibold transition hover:bg-white/10">Réalisations</a>
                @elseif (auth()->user()->isEditeur())
                    <a href="{{ route('admin.blog.index') }}" class="block rounded-2xl px-4 py-3 font-semibold transition hover:bg-white/10">Articles</a>
                    <a href="{{ route('admin.categories.index') }}" class="block rounded-2xl px-4 py-3 font-semibold transition hover:bg-white/10">Categories</a>
                    <a href="{{ route('admin.portfolio.index') }}" class="block rounded-2xl px-4 py-3 font-semibold transition hover:bg-white/10">Réalisations</a>
                @elseif (auth()->user()->isInvestisseur())
                    @foreach (['Mon projet', 'Rapports', 'Parcelles', 'Dépenses', 'Documents', 'Alertes', 'Just Control Live', 'Assistance'] as $item)
                        <span class="block rounded-2xl px-4 py-3 font-semibold text-slate-300">{{ $item }}</span>
                    @endforeach
                @else
                    @foreach (['Mon programme', 'Contrats & LOI', 'Volumes', 'Livraisons', 'Qualité', 'Documents', 'Alertes', 'Just Control Live', 'Support'] as $item)
                        <span class="block rounded-2xl px-4 py-3 font-semibold text-slate-300">{{ $item }}</span>
                    @endforeach
                @endif
            </nav>
        </aside>

        <div class="flex-1 lg:pl-72">
            <header class="border-b border-slate-200 bg-white">
                <div class="flex items-center justify-between px-6 py-5 lg:px-8">
                    <div>
                        <p class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">{{ auth()->user()->role?->label() ?? 'Utilisateur' }}</p>
                        <h1 class="mt-1 font-heading text-2xl font-extrabold text-jagNavy">@yield('heading', 'Tableau de bord')</h1>
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="{{ route('profile.edit') }}" class="rounded-full border border-slate-200 px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-jagNavy">Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="rounded-full bg-jagNavy px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] text-white">Déconnexion</button>
                        </form>
                    </div>
                </div>
            </header>

            <main class="px-6 py-8 lg:px-8">
                @if (session('success'))
                    <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 px-5 py-4 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
