@props(['name' => 'leaf'])

@switch($name)
    @case('shield')
        <svg {{ $attributes->merge(['class' => 'h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 3l7 3v5c0 5-3.5 8.5-7 10-3.5-1.5-7-5-7-10V6l7-3Z" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="m9.5 12 1.7 1.7L14.8 10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @break

    @case('factory')
        <svg {{ $attributes->merge(['class' => 'h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M4 21h16" stroke-linecap="round"/>
            <path d="M5.5 21V10l5 3V9l5 4V7h3V21" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8 17h.01M12 17h.01M16 17h.01" stroke-linecap="round"/>
        </svg>
        @break

    @case('chart')
        <svg {{ $attributes->merge(['class' => 'h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M4 19h16" stroke-linecap="round"/>
            <path d="M7 16V9" stroke-linecap="round"/>
            <path d="M12 16V5" stroke-linecap="round"/>
            <path d="M17 16v-3" stroke-linecap="round"/>
        </svg>
        @break

    @case('leaf')
        <svg {{ $attributes->merge(['class' => 'h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M5 19c8 0 14-6 14-14-8 0-14 6-14 14Z" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5 19c3.5-5 7-8 14-14" stroke-linecap="round"/>
        </svg>
        @break

    @case('clipboard')
        <svg {{ $attributes->merge(['class' => 'h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M9 4h6l1 2h2a1 1 0 0 1 1 1v13H5V7a1 1 0 0 1 1-1h2l1-2Z" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 12h6M9 16h4" stroke-linecap="round"/>
        </svg>
        @break

    @case('map')
        <svg {{ $attributes->merge(['class' => 'h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="m9 18-5 2V6l5-2 6 2 5-2v14l-5 2-6-2Z" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 4v14M15 6v14" stroke-linecap="round"/>
        </svg>
        @break

    @case('truck')
        <svg {{ $attributes->merge(['class' => 'h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M3 7h11v10H3V7Z" stroke-linejoin="round"/>
            <path d="M14 11h4l3 3v3h-7v-6Z" stroke-linejoin="round"/>
            <path d="M7 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM17 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" stroke-linecap="round"/>
        </svg>
        @break

    @case('document')
        <svg {{ $attributes->merge(['class' => 'h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M7 3h7l4 4v14H7V3Z" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14 3v5h5M9.5 13h5M9.5 17h5" stroke-linecap="round"/>
        </svg>
        @break

    @case('target')
        <svg {{ $attributes->merge(['class' => 'h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" stroke-linecap="round"/>
            <path d="M12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" stroke-linecap="round"/>
            <path d="M12 12h.01" stroke-linecap="round"/>
        </svg>
        @break
@endswitch
