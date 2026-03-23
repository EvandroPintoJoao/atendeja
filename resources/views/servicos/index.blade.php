@extends('layouts.app', ['active' => 'servicos.index'])
@section('title', 'Serviços')
@section('content')
<div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold">Serviços</h2>
    <x-button type="primary" x-data x-on:click="$dispatch('open-modal', { id: 'createServico' })">Criar serviço</x-button>
</div>
<x-table :empty="'Nenhum serviço cadastrado.'">
    <x-slot name="thead">
        <tr>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Descrição</th>
            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Ações</th>
        </tr>
    </x-slot>
    <tr>
        <td class="px-4 py-2">Consulta</td>
        <td class="px-4 py-2">Atendimento médico geral</td>
        <td class="px-4 py-2 flex gap-2">
            <x-button type="primary">Editar</x-button>
            <x-button type="danger">Excluir</x-button>
        </td>
    </tr>
</x-table>
<x-modal :show="false" title="Criar serviço" id="createServico">
    <form>
        <x-input name="nome" label="Nome" required />
        <x-input name="descricao" label="Descrição" required />
        <div class="flex justify-end gap-2 mt-4">
            <x-button type="secondary">Cancelar</x-button>
            <x-button type="primary">Salvar</x-button>
        </div>
    </form>
</x-modal>
@endsection
