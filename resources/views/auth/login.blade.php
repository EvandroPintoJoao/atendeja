@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="max-w-md mx-auto mt-16">
    <x-card>
        <h2 class="text-xl font-bold mb-4 text-center">Entrar no AtendeJá</h2>
        <form method="POST" action="{{ route('login.attempt') }}" class="flex flex-col gap-4">
            @csrf
            <x-input name="email" label="E-mail" type="email" required />
            <x-input name="password" label="Senha" type="password" required />
            <div class="flex justify-between items-center">
                <a href="#" class="text-sm text-teal-600 hover:underline">Esqueceu a senha?</a>
            </div>
            <x-button type="primary">Entrar</x-button>
        </form>
        <div class="mt-4 text-center text-sm">
            Não tem uma conta? <a href="{{ route('register') }}" class="text-teal-600 hover:underline">Criar conta</a>
        </div>
    </x-card>
</div>
@endsection
