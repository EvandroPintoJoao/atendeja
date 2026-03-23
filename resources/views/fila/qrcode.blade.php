@extends('layouts.app')
@section('title', 'Ler QR Code da Fila')
@section('content')
<div class="max-w-md mx-auto mt-16">
    <x-card>
        <h2 class="text-xl font-bold mb-4 text-center">Ler QR Code para obter número da fila</h2>
        <div class="flex flex-col items-center gap-4">
            <div class="w-64 h-64 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                <span class="text-gray-400">[Scanner de QR Code]</span>
            </div>
            <form method="POST" action="{{ route('fila.qrcode.ler') }}" class="w-full flex flex-col gap-2">
                @csrf
                <x-input name="qrcode" label="Código QR" required />
                <x-button type="primary">Obter número da fila</x-button>
            </form>
        </div>
    </x-card>
</div>
@endsection
