@extends('layouts.app')
@section('title', 'Bem-vindo ao AtendeJá')
@section('content')
<div class="max-w-2xl mx-auto mt-16">
    <x-card>
        <div class="flex flex-col items-center text-center">
            <x-svg name="logo" class="w-16 h-16 mb-4" />
            <h1 class="text-3xl font-bold mb-2 text-teal-700">Bem-vindo ao AtendeJá</h1>
            <p class="text-gray-700 mb-6 text-lg">O AtendeJá é um sistema moderno de gestão de filas para clínicas e hospitais, projetado para agilizar o atendimento, melhorar a experiência do paciente e otimizar o fluxo de trabalho da equipe.</p>
            <div class="text-left w-full max-w-lg mx-auto mb-6">
                <h2 class="text-xl font-semibold mb-2">Funcionalidades principais:</h2>
                <ul class="list-disc list-inside text-gray-800 space-y-1">
                    <li>Gestão de pacientes e cadastro rápido</li>
                    <li>Controle de filas em tempo real</li>
                    <li>Chamada e priorização de pacientes</li>
                    <li>Registro e acompanhamento de atendimentos</li>
                    <li>Relatórios e indicadores de desempenho</li>
                    <li>Configurações personalizáveis para sua unidade</li>
                </ul>
            </div>
            <div class="mb-6">
                <x-badge type="info">Acesse sua conta para começar</x-badge>
            </div>
            <a href="{{ route('login') }}" class="inline-block">
                <x-button type="primary">Entrar</x-button>
            </a>
        </div>
    </x-card>
</div>
@endsection
