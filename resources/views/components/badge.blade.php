@props(['type' => 'info'])
@php
    $colors = [
        'success' => 'bg-green-100 text-green-700',
        'warning' => 'bg-yellow-100 text-yellow-800',
        'danger' => 'bg-red-100 text-red-700',
        'info' => 'bg-blue-100 text-blue-700',
        'default' => 'bg-gray-100 text-gray-700',
    ];
    $classes = $colors[$type] ?? $colors['default'];
@endphp
<span {{ $attributes->merge(['class' => 'inline-block px-2 py-0.5 rounded-lg text-xs font-semibold '.$classes]) }}>
    {{ $slot }}
</span>
