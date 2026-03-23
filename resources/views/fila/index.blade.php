@extends('layouts.app', ['active' => 'fila.index'])
@section('title', 'Fila de Atendimento')
@section('content')
<div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold">Fila de Atendimento</h2>
    <x-button type="primary">Chamar próximo</x-button>
</div>
<x-table :empty="'Nenhum paciente na fila.'">
    <x-slot name="thead">
        <tr>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Código</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Prioridade</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Tempo de espera</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Ações</th>
        </tr>
    </x-slot>
    <tr>
        <td class="px-4 py-2">A001</td>
        <td class="px-4 py-2">João Silva</td>
        <td class="px-4 py-2"><x-badge type="warning">Alta</x-badge></td>
        <td class="px-4 py-2"><x-badge type="success">Aguardando</x-badge></td>
        <td class="px-4 py-2">10m</td>
        <td class="px-4 py-2 flex gap-2">
            <x-button type="primary">Chamar</x-button>
            <x-button type="success">Atendido</x-button>
            <x-button type="secondary">Priorizar</x-button>
        </td>
    </tr>
</x-table>
@endsection
