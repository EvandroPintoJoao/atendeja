@props([
    'type' => 'text',
    'label' => null,
    'name',
    'value' => '',
    'required' => false,
    'disabled' => false,
    'error' => null
])
<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}@if($required)<span class="text-red-500 ml-1">*</span>@endif</label>
    @endif
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        @if($required) required aria-required="true" @endif
        @if($disabled) disabled aria-disabled="true" @endif
        {{ $attributes->merge(['class' => 'block w-full rounded-lg border border-gray-200 px-3 py-2 text-sm focus:ring-2 focus:ring-teal-200 focus:outline-none '.($error ? 'border-red-400' : '')]) }}
        aria-invalid="{{ $error ? 'true' : 'false' }}"
        aria-describedby="{{ $error ? $name.'-error' : '' }}"
    >
    @if($error)
        <p class="mt-1 text-xs text-red-600" id="{{ $name }}-error">{{ $error }}</p>
    @endif
</div>
