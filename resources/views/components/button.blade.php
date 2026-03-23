@props([
    'type' => 'primary', // primary, secondary, danger
    'loading' => false,
    'disabled' => false
])

@php
    $base = 'inline-flex items-center justify-center px-4 py-2   transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2';
    $types = [
        'primary' => 'bg-teal-600 text-white hover:bg-teal-700 focus:ring-teal-300',
        'secondary' => 'bg-gray-100 text-gray-800 hover:bg-gray-200 focus:ring-gray-300',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-300',
    ];
    $classes = $base . ' ' . ($types[$type] ?? $types['primary']);
@endphp

<button {{ $attributes->merge(['class' => $classes]) }} @if($disabled || $loading) disabled aria-disabled="true" @endif>
    @if($loading)
        <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path></svg>
    @endif
    <span>{{ $slot }}</span>
</button>
