<div {{ $attributes->merge(['class' => 'bg-white shadow p-6 border border-gray-100']) }} style="background-image: {{ asset('assets/img/diagonal-lines.svg') }} !important; background-repeat: repeat;">
    {{ $slot }}
</div>
