@props(['name', 'class' => ''])
@switch($name)
    @case('logo')
        <svg class="{{ $class }}" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <!-- Fundo robusto: rounded hexagon -->
            <polygon points="8,2 32,2 38,20 32,38 8,38 2,20" fill="#033C3B" stroke="#21D789" stroke-width="2"/>
            <!-- Sombra interna -->
            <polygon points="10,6 30,6 35,20 30,34 10,34 5,20" fill="none" stroke="#21D789" stroke-opacity="0.15" stroke-width="2"/>
            <!-- Glow verde -->
            <filter id="glow" x="-20%" y="-20%" width="140%" height="140%">
                <feDropShadow dx="0" dy="0" stdDeviation="2" flood-color="#21D789" flood-opacity="0.5"/>
            </filter>
            <!-- Texto centralizado -->
            <text x="50%" y="54%" dominant-baseline="middle" text-anchor="middle" font-size="13" font-weight="bold" fill="#fff" font-family="Inter, system-ui, -apple-system, sans-serif" letter-spacing="0.5" filter="url(#glow)">
                AJ
            </text>
        </svg>
    @break

    @case('home')
        <svg class="{{ $class }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 12l2-2m0 0l7-7 7 7m-9 2v6a2 2 0 002 2h4a2 2 0 002-2v-6m-6 0l-7 7" />
        </svg>
    @break

    @case('users')
        <svg class="{{ $class }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-5a4 4 0 11-8 0 4 4 0 018 0zm6 8v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2a6 6 0 0112 0z" />
        </svg>
    @break

    @case('queue')
        <svg class="{{ $class }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m-4-4v8" />
        </svg>
    @break

    @case('activity')
        <svg class="{{ $class }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
        </svg>
    @break

    @case('briefcase')
        <svg class="{{ $class }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect x="2" y="7" width="20" height="14" rx="2" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 3v4M8 3v4" />
        </svg>
    @break

    @case('settings')
        <svg class="{{ $class }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="3" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09a1.65 1.65 0 00-1-1.51 1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09a1.65 1.65 0 001.51-1 1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06a1.65 1.65 0 001.82.33h.09a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51h.09a1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06a1.65 1.65 0 00-.33 1.82v.09a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" />
        </svg>
    @break

    @default
        <span class="{{ $class }}">?</span>
@endswitch
