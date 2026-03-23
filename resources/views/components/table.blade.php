<div class="overflow-x-auto rounded-lg shadow-sm border border-gray-200 bg-white">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            {{ $thead }}
        </thead>
        <tbody class="divide-y divide-gray-100">
            {{ $slot }}
        </tbody>
    </table>
    @if(isset($empty) && $empty)
        <div class="p-6 text-center text-gray-400 text-sm">{{ $empty }}</div>
    @endif
</div>
