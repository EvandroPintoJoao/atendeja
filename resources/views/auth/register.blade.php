@extends('layouts.app')
@section('title', 'Criar Conta')
@section('content')
<div class="max-w-md mx-auto mt-16">
    <x-card>
        <h2 class="text-xl font-bold mb-4 text-center">Criar Conta</h2>
        <form method="POST" action="{{ route('register.attempt') }}" class="flex flex-col gap-4">
            @csrf
            <x-input name="name" label="Nome" required />
            <x-input name="email" label="E-mail" type="email" required />
            <x-input name="password" label="Senha" type="password" required />
            <x-input name="password_confirmation" label="Confirmar Senha" type="password" required />
            <x-button type="primary">Registrar</x-button>
        </form>
        <div class="mt-4 text-center text-sm">
            Já tem uma conta? <a href="{{ route('login') }}" class="text-teal-600 hover:underline">Entrar</a>
        </div>
    </x-card>
</div>
@endsection
