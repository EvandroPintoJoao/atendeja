@props([
    'show' => false,
    'title' => null,
    'maxWidth' => 'md',
])
@if($show)
<div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 transition-opacity animate-fade-in" x-data x-show="true" x-transition:enter="ease-out duration-200" x-transition:leave="ease-in duration-150" role="dialog" aria-modal="true" aria-labelledby="modal-title">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-{{ $maxWidth }} mx-4 p-6 relative animate-modal-in" tabindex="-1">
        <button type="button" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 focus:outline-none" @click="$dispatch('close')" aria-label="Fechar">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        @if($title)
            <h2 id="modal-title" class="text-lg font-bold mb-4">{{ $title }}</h2>
        @endif
        {{ $slot }}
    </div>
</div>
@endif
