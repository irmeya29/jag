@extends('layouts.app')

@section('title', 'Contact | Just Agro Group')
@section('meta_description', 'Contactez Just Agro Group via un formulaire qualifié selon votre profil.')

@section('content')
<section class="bg-jagNavy py-20 text-white sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagOrange">Contact</p>
        <h1 class="mt-4 max-w-4xl font-heading text-4xl font-extrabold sm:text-5xl">
            Entrons dans le bon parcours dès le premier échange
        </h1>
        <p class="mt-6 max-w-3xl text-base leading-8 text-slate-200">
            Investisseur privé ou industriel, choisissez votre profil pour envoyer une demande adaptée à votre besoin.
        </p>
    </div>
</section>

<section x-data="{ profile: '{{ request('profile', old('profile_type', 'investisseur')) }}' }" class="bg-white py-20 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[1.1fr_0.9fr] lg:px-8">
        <div class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-soft">
            <div class="flex flex-col gap-3 sm:flex-row">
                <button type="button"
                        @click="profile = 'investisseur'"
                        :class="profile === 'investisseur' ? 'bg-jagGreen text-white border-jagGreen' : 'bg-white text-jagNavy border-slate-300'"
                        class="rounded-full border px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.18em] transition">
                    Je suis investisseur
                </button>

                <button type="button"
                        @click="profile = 'industriel'"
                        :class="profile === 'industriel' ? 'bg-jagBlue text-white border-jagBlue' : 'bg-white text-jagNavy border-slate-300'"
                        class="rounded-full border px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.18em] transition">
                    Je suis industriel
                </button>
            </div>

            @if (session('success'))
                <div class="mt-6 rounded-2xl border border-green-200 bg-green-50 px-5 py-4 text-sm text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mt-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">
                    Merci de corriger les champs en erreur.
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="mt-8 space-y-6">
                @csrf

                <input type="hidden" name="profile_type" :value="profile">

                <div class="hidden">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    <label class="block sm:col-span-2">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Nom complet</span>
                        <input type="text" name="name" value="{{ old('name') }}"
                               class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none">
                        @error('name') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>

                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Email</span>
                        <input type="email" name="email" value="{{ old('email') }}"
                               class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none">
                        @error('email') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>

                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Téléphone</span>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                               class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none">
                        @error('phone') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>
                </div>

                <div x-show="profile === 'investisseur'" x-transition class="grid gap-6 sm:grid-cols-2">
                    <label class="block sm:col-span-2">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Localisation du terrain</span>
                        <input type="text" name="land_location" value="{{ old('land_location') }}"
                               class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none">
                        @error('land_location') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>

                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Superficie (ha)</span>
                        <input type="number" step="0.01" min="0" name="land_size_hectare" value="{{ old('land_size_hectare') }}"
                               class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none">
                        @error('land_size_hectare') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>

                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Forage disponible ?</span>
                        <select name="has_borehole"
                                class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagGreen focus:outline-none">
                            <option value="">Sélectionner</option>
                            <option value="1" @selected(old('has_borehole') === '1')>Oui</option>
                            <option value="0" @selected(old('has_borehole') === '0')>Non</option>
                        </select>
                        @error('has_borehole') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>
                </div>

                <div x-show="profile === 'industriel'" x-transition class="grid gap-6 sm:grid-cols-2">
                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Entreprise</span>
                        <input type="text" name="company" value="{{ old('company') }}"
                               class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagBlue focus:outline-none">
                        @error('company') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>

                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Fonction</span>
                        <input type="text" name="job_title" value="{{ old('job_title') }}"
                               class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagBlue focus:outline-none">
                        @error('job_title') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>

                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Produit recherché</span>
                        <input type="text" name="requested_product" value="{{ old('requested_product') }}"
                               class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagBlue focus:outline-none">
                        @error('requested_product') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>

                    <label class="block">
                        <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Volume annuel</span>
                        <input type="number" step="0.01" min="0" name="annual_volume" value="{{ old('annual_volume') }}"
                               class="mt-2 w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm focus:border-jagBlue focus:outline-none">
                        @error('annual_volume') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                    </label>
                </div>

                <label class="block">
                    <span class="text-xs font-heading font-bold uppercase tracking-[0.18em] text-slate-500">Message</span>
                    <textarea name="message" rows="6"
                              class="mt-2 w-full rounded-[1.5rem] border border-slate-300 px-4 py-4 text-sm focus:border-jagGreen focus:outline-none">{{ old('message') }}</textarea>
                    @error('message') <span class="mt-2 block text-sm text-red-600">{{ $message }}</span> @enderror
                </label>

                <button type="submit"
                        class="inline-flex rounded-full bg-jagOrange px-6 py-4 text-xs font-heading font-bold uppercase tracking-[0.18em] text-white">
                    Envoyer ma demande
                </button>
            </form>
        </div>

        <aside class="space-y-6">
            <div class="rounded-[2rem] bg-jagMuted p-8 shadow-soft">
                <div class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagGreen">Coordonnées</div>
                <div class="mt-6 space-y-4 text-sm leading-7 text-jagText">
                    <p><span class="font-semibold text-jagNavy">Adresse :</span> Koudougou, Burkina Faso</p>
                    <p><span class="font-semibold text-jagNavy">Email :</span> justagrogroup@gmail.com</p>
                    <p><span class="font-semibold text-jagNavy">Téléphone :</span> +226 54 12 62 99 / +226 72 84 10 89</p>
                    <p><span class="font-semibold text-jagNavy">WhatsApp :</span> +226 78 61 21 52</p>
                </div>
            </div>

            <div class="rounded-[2rem] bg-white p-8 shadow-soft">
                <div class="text-xs font-heading font-bold uppercase tracking-[0.20em] text-jagBlue">Carte</div>
                <div class="mt-5 flex min-h-[260px] items-center justify-center rounded-3xl border border-dashed border-slate-300 bg-jagMuted text-center text-sm text-slate-500">
                    Zone Google Maps — Koudougou
                </div>
            </div>
        </aside>
    </div>
</section>
@endsection