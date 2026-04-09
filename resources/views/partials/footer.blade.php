<footer class="bg-jagNavy text-white">
    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="grid gap-12 border-b border-white/10 pb-12 lg:grid-cols-[1.2fr_0.8fr_0.8fr_1fr]">
            <div>
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-jagGreen text-sm font-heading font-extrabold text-white">
                        JAG
                    </div>
                    <div>
                        <div class="font-heading text-sm font-extrabold uppercase tracking-[0.18em] text-white">
                            Just Agro Group
                        </div>
                        <div class="text-xs text-slate-400">Produire avec exigence</div>
                    </div>
                </a>

                <p class="mt-6 max-w-md text-sm leading-7 text-slate-300">
                    Opérateur agricole industriel, contractuel, rigoureux et transparent,
                    Just Agro Group structure des projets agricoles orientés marché avec une lecture claire
                    pour les investisseurs et les industriels.
                </p>

                <div class="mt-6 flex flex-wrap gap-3">
                    <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-slate-300">
                        Pôle 1 — MOA
                    </span>
                    <span class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-slate-300">
                        Pôle 2 — Industriel
                    </span>
                </div>
            </div>

            <div>
                <h3 class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-white/80">Navigation</h3>
                <ul class="mt-5 space-y-3 text-sm text-slate-300">
                    <li><a href="{{ route('home') }}" class="transition hover:text-white">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="transition hover:text-white">À propos</a></li>
                    <li><a href="{{ route('processus') }}" class="transition hover:text-white">Notre Processus</a></li>
                    <li><a href="{{ route('portfolio.index') }}" class="transition hover:text-white">Réalisations</a></li>
                    <li><a href="{{ route('blog.index') }}" class="transition hover:text-white">Actualités</a></li>
                    <li><a href="{{ route('contact.create') }}" class="transition hover:text-white">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-white/80">Nos pôles</h3>
                <ul class="mt-5 space-y-3 text-sm text-slate-300">
                    <li><a href="{{ route('pole-1') }}" class="transition hover:text-white">Pôle 1 — Maîtrise d’Ouvrage Agricole</a></li>
                    <li><a href="{{ route('pole-2') }}" class="transition hover:text-white">Pôle 2 — Fournisseur Industriel</a></li>
                    <li><a href="{{ route('mon-espace-just') }}" class="transition hover:text-white">Mon Espace Just</a></li>
                    <li><a href="{{ route('login') }}" class="transition hover:text-white">Connexion</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-white/80">Coordonnées</h3>

                <div class="mt-5 space-y-4 text-sm leading-7 text-slate-300">
                    <div>
                        <div class="font-semibold text-white">Adresse</div>
                        <div>Koudougou, Burkina Faso</div>
                    </div>

                    <div>
                        <div class="font-semibold text-white">Email</div>
                        <a href="mailto:justagrogroup@gmail.com" class="transition hover:text-white">
                            justagrogroup@gmail.com
                        </a>
                    </div>

                    <div>
                        <div class="font-semibold text-white">Téléphone</div>
                        <div>+226 54 12 62 99 / +226 72 84 10 89</div>
                    </div>

                    <div>
                        <div class="font-semibold text-white">WhatsApp</div>
                        <div>+226 78 61 21 52</div>
                    </div>
                </div>
            </div>
        </div>

            <div class="flex flex-col gap-4 pt-6 text-xs text-slate-400 lg:flex-row lg:items-center lg:justify-between">
                <p>
                    © 2026 Just Agro Group. Tous droits réservés. —
                    Réalisé par
                    <a href="https://irmeyaouedraogo.com" target="_blank" rel="noopener noreferrer" class="font-semibold text-white transition hover:text-jagOrange">
                        Irdel
                    </a>
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('mentions-legales') }}" class="transition hover:text-white">Mentions légales</a>
                    <a href="{{ route('contact.create') }}" class="transition hover:text-white">Contact</a>
                </div>
            </div>
    </div>
</footer>