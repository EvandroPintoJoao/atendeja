@extends('layouts.app', ['active' => 'dashboard'])
@section('title', 'Painel principal')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
        <x-card>
            <div class="flex items-center gap-4">
                <div class="bg-teal-100 text-teal-600 rounded-full p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-5a4 4 0 11-8 0 4 4 0 018 0zm6 8v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2a6 6 0 0112 0z" />
                    </svg>
                </div>
                <div>
                    <div class="text-sm text-gray-500">Total pacientes hoje</div>
                    <div class="text-2xl font-bold">123</div>
                </div>
            </div>
        </x-card>
        <x-card>
            <div class="flex items-center gap-4">
                <div class="bg-blue-100 text-blue-600 rounded-full p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 17l4 4 4-4m0-5V3a1 1 0 00-1-1H7a1 1 0 00-1 1v9m12 4h-4a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v7a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div>
                    <div class="text-sm text-gray-500">Pacientes na fila</div>
                    <div class="text-2xl font-bold">18</div>
                </div>
            </div>
        </x-card>
        <x-card>
            <div class="flex items-center gap-4">
                <div class="bg-yellow-100 text-yellow-600 rounded-full p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4l3 3m6 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <div class="text-sm text-gray-500">Tempo médio de espera</div>
                    <div class="text-2xl font-bold">12m</div>
                </div>
            </div>
        </x-card>
        <x-card>
            <div class="flex items-center gap-4">
                <div class="bg-green-100 text-green-600 rounded-full p-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <div class="text-sm text-gray-500">Atendimentos concluídos</div>
                    <div class="text-2xl font-bold">45</div>
                </div>
            </div>
        </x-card>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <x-card>
            <div class="font-semibold mb-2">Fila de pacientes (exemplo)</div>
            <x-table :empty="'Nenhum paciente na fila.'">
                <x-slot name="thead">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Código</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    </tr>
                </x-slot>
                <tr>
                    <td class="px-4 py-2">A001</td>
                    <td class="px-4 py-2">João Silva</td>
                    <td class="px-4 py-2"><x-badge type="success">Aguardando</x-badge></td>
                </tr>
                <tr>
                    <td class="px-4 py-2">A002</td>
                    <td class="px-4 py-2">Maria Souza</td>
                    <td class="px-4 py-2"><x-badge type="info">Chamado</x-badge></td>
                </tr>
            </x-table>
        </x-card>
        <x-card>
            <div class="font-semibold mb-2">Atendimentos recentes (exemplo)</div>
            <x-table :empty="'Nenhum atendimento recente.'">
                <x-slot name="thead">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Paciente</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Serviço</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    </tr>
                </x-slot>
                <tr>
                    <td class="px-4 py-2">João Silva</td>
                    <td class="px-4 py-2">Consulta</td>
                    <td class="px-4 py-2"><x-badge type="success">Concluído</x-badge></td>
                </tr>
                <tr>
                    <td class="px-4 py-2">Maria Souza</td>
                    <td class="px-4 py-2">Exame</td>
                    <td class="px-4 py-2"><x-badge type="danger">Cancelado</x-badge></td>
                </tr>
            </x-table>
        </x-card>
    </div>
@endsection
