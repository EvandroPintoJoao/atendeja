@extends('layouts.app', ['active' => 'pacientes.index'])
@section('title', 'Pacientes')
@section('content')
<div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold">Pacientes</h2>
    <x-button type="primary" x-data x-on:click="$dispatch('open-modal', { id: 'createPaciente' })">Criar paciente</x-button>
</div>
<x-table :empty="'Nenhum paciente cadastrado.'">
    <x-slot name="thead">
        <tr>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Telefone</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">BI</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Data de nascimento</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Ações</th>
        </tr>
    </x-slot>
    <tr>
        <td class="px-4 py-2">João Silva</td>
        <td class="px-4 py-2">+244 912 345 678</td>
        <td class="px-4 py-2">123456789LA012</td>
        <td class="px-4 py-2">1990-01-01</td>
        <td class="px-4 py-2 flex gap-2">
            <x-button type="secondary">Visualizar</x-button>
            <x-button type="primary">Editar</x-button>
        </td>
    </tr>
</x-table>
<x-modal :show="false" title="Criar paciente" id="createPaciente">
    <form>
        <x-input name="nome" label="Nome" required />
        <x-input name="telefone" label="Telefone" type="tel" required />
        <x-input name="bi" label="BI" required />
        <x-input name="data_nascimento" label="Data de nascimento" type="date" required />
        <div class="flex justify-end gap-2 mt-4">
            <x-button type="secondary">Cancelar</x-button>
            <x-button type="primary">Salvar</x-button>
        </div>
    </form>
</x-modal>
@endsection
