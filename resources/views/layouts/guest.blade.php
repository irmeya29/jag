<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Just Agro Group') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        jagGreen: '#2EAA63',
                        jagBlue: '#1E9BD7',
                        jagNavy: '#0D2137',
                        jagForest: '#0A3D2E',
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

    <style>
        [x-cloak] { display: none !important; }
    </style>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-screen bg-jagMuted font-body text-jagText antialiased">
    <div class="flex min-h-screen flex-col items-center justify-center px-6 py-12">
        <div class="mb-8">
            <a href="{{ route('home') }}" class="inline-flex items-center justify-center">
                <img
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="Just Agro Group"
                    class="h-24 w-auto object-contain"
                >
            </a>
        </div>

        <div class="w-full max-w-md rounded-3xl border border-slate-200 bg-white p-8 shadow-soft">
            {{ $slot }}
        </div>
    </div>
</body>
</html>