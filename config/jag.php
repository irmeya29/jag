<?php

return [
    'brand' => [
        'name' => 'Just Agro Group',
        'slogan' => 'Produire avec exigence',
        'email' => 'justagrogroup@gmail.com',
        'phones' => ['+226 54 12 62 99', '+226 72 84 10 89'],
        'whatsapp' => '+226 78 61 21 52',
        'address' => 'Koudougou, Burkina Faso',
        'site_url' => 'https://www.justentreprise.com',
    ],
    'colors' => [
        'green' => '#2EAA63',
        'blue' => '#1E9BD7',
        'navy' => '#0D2137',
        'forest' => '#0A3D2E',
        'orange' => '#FF6B35',
        'text' => '#555555',
        'muted' => '#F7F8FC',
        'white' => '#FFFFFF',
    ],
    'menu' => [
        ['label' => 'Accueil', 'route' => 'home'],
        ['label' => 'Notre Processus', 'route' => 'processus'],
        ['label' => 'Réalisations', 'route' => 'portfolio.index'],
        ['label' => 'Actualités', 'route' => 'blog.index'],
        ['label' => 'Contact', 'route' => 'contact.create'],
    ],
    'pole_menu' => [
        ['label' => 'Pôle 1 — MOA', 'route' => 'pole-1'],
        ['label' => 'Pôle 2 — Fournisseur Industriel', 'route' => 'pole-2'],
    ],
];