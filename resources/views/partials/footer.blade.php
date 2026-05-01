<footer class="bg-jagNavy text-white">
    <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">
        <div class="grid gap-10 border-b border-white/10 pb-10 lg:grid-cols-[1.25fr_0.75fr_0.75fr_1fr]">

            {{-- Bloc identité --}}
            <div>
                <a href="{{ route('home') }}" class="inline-flex items-center">
                    <img
                        src="{{ asset('assets/images/logo.png') }}"
                        alt="Just Agro Group"
                        class="h-20 w-auto object-contain"
                        loading="lazy"
                    >
                </a>

                <p class="mt-6 max-w-md text-sm leading-7 text-slate-300">
                    Opérateur agricole industriel, contractuel, rigoureux et transparent.
                    Just Agro Group structure des projets agricoles orientés marché avec une lecture claire
                    pour les investisseurs, industriels et partenaires institutionnels.
                </p>

                <div class="mt-6">
                    <a
                        href="{{ route('contact.create') }}"
                        class="inline-flex items-center justify-center rounded-full bg-jagGreen px-5 py-3 text-xs font-heading font-extrabold uppercase tracking-[0.14em] text-white transition hover:bg-jagOrange"
                    >
                        Contacter JAG
                    </a>
                </div>
            </div>

            {{-- Navigation --}}
            <div>
                <h3 class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-white/80">
                    Navigation
                </h3>

                <ul class="mt-5 space-y-3 text-sm text-slate-300">
                    <li><a href="{{ route('home') }}" class="transition hover:text-white">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="transition hover:text-white">À propos</a></li>
                    <li><a href="{{ route('processus') }}" class="transition hover:text-white">Notre Processus</a></li>
                    <li><a href="{{ route('portfolio.index') }}" class="transition hover:text-white">Réalisations</a></li>
                    <li><a href="{{ route('blog.index') }}" class="transition hover:text-white">Actualités</a></li>
                    <li><a href="{{ route('contact.create') }}" class="transition hover:text-white">Contact</a></li>
                </ul>
            </div>

            {{-- Accès rapides --}}
            <div>
                <h3 class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-white/80">
                    Accès rapides
                </h3>

                <ul class="mt-5 space-y-3 text-sm text-slate-300">
                    <li><a href="{{ route('pole-1') }}" class="transition hover:text-white">Pôle 1</a></li>
                    <li><a href="{{ route('pole-2') }}" class="transition hover:text-white">Pôle 2</a></li>
                    <li><a href="{{ route('mon-espace-just') }}" class="transition hover:text-white">Mon Espace Just</a></li>
                    <li><a href="{{ route('login') }}" class="transition hover:text-white">Connexion</a></li>
                    <li><a href="{{ route('mentions-legales') }}" class="transition hover:text-white">Mentions légales</a></li>
                </ul>
            </div>

            {{-- Coordonnées --}}
            <div>
                <h3 class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-white/80">
                    Coordonnées
                </h3>

                <div class="mt-5 space-y-4 text-sm leading-7 text-slate-300">
                    <div>
                        <div class="font-semibold text-white">Adresse</div>
                        <div>Koudougou, Burkina Faso</div>
                    </div>

                    <div>
                        <div class="font-semibold text-white">Email</div>
                        <a href="mailto:contact@justagrogroup.com" class="transition hover:text-white">
                            contact@justagrogroup.com
                        </a>
                    </div>

                    <div>
                        <div class="font-semibold text-white">Téléphone</div>
                        <a href="tel:+22654126299" class="transition hover:text-white">
                            +226 54 12 62 99
                        </a>
                        <span class="text-slate-500"> / </span>
                        <a href="tel:+22672841089" class="transition hover:text-white">
                            +226 72 84 10 89
                        </a>
                    </div>

                    <div>
                        <div class="font-semibold text-white">WhatsApp</div>
                        <a
                            href="https://wa.me/22678612152"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="transition hover:text-white"
                        >
                            +226 78 61 21 52
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bas footer --}}
        <div class="flex flex-col gap-4 pt-6 text-xs text-slate-400 lg:flex-row lg:items-center lg:justify-between">
            <p>
                © 2026 Just Agro Group. Tous droits réservés. —
                Réalisé par
                <a
                    href="https://irmeyaouedraogo.com"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="font-semibold text-white transition hover:text-jagOrange"
                >
                    Irdel
                </a>
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('mentions-legales') }}" class="transition hover:text-white">
                    Mentions légales
                </a>

                <a href="{{ route('contact.create') }}" class="transition hover:text-white">
                    Contact
                </a>
            </div>
        </div>
    </div>
</footer>