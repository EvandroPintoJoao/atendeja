@extends('layouts.app', ['active' => 'atendimentos.index'])
@section('title', 'Atendimentos')
@section('content')
<div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold">Atendimentos</h2>
    <x-button type="primary">Chamar próximo</x-button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <x-card>
        <div class="font-semibold mb-2">Paciente em atendimento</div>
        <div class="flex items-center gap-4 mb-4">
            <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center text-2xl font-bold text-gray-500">J</div>
            <div>
                <div class="text-lg font-bold">João Silva</div>
                <div class="text-sm text-gray-500">Senha: A001</div>
            </div>
        </div>
        <div class="flex gap-2">
            <x-button type="primary">Iniciar atendimento</x-button>
            <x-button type="success">Finalizar atendimento</x-button>
        </div>
    </x-card>
    <x-card>
        <div class="font-semibold mb-2">Informações do paciente</div>
        <div class="text-sm text-gray-700">
            <div><span class="font-semibold">Nome:</span> João Silva</div>
            <div><span class="font-semibold">Telefone:</span> +244 912 345 678</div>
            <div><span class="font-semibold">BI:</span> 123456789LA012</div>
            <div><span class="font-semibold">Data de nascimento:</span> 1990-01-01</div>
        </div>
    </x-card>
</div>
@endsection
