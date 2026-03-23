@extends('layouts.app')
@section('title', 'Bem-vindo ao AtendeJá')
@section('content')
    <div class="relative min-h-[70vh] flex flex-col justify-center items-center overflow-hidden bg-gradient-to-br from-teal-300 via-white to-green-400 py-16 px-4"
        style="background-image: {{ asset('assets/img/diagonal-lines.svg') }}; background-repeat: repeat;">
        <!-- SVG Abstract Backgrounds -->
        <div class="absolute inset-0 pointer-events-none select-none z-0">
            <svg class="absolute -top-32 -left-32 w-[32rem] h-[32rem] opacity-70" viewBox="0 0 512 512" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="grad1" cx="50%" cy="50%" r="80%" fx="50%" fy="50%">
                        <stop offset="0%" stop-color="#096781" stop-opacity="0.25" />
                        <stop offset="100%" stop-color="#0AB163" stop-opacity="0.1" />
                    </radialGradient>
                </defs>
                <ellipse cx="256" cy="256" rx="220" ry="180" fill="url(#grad1)" />
            </svg>
            <svg class="absolute top-24 right-0 w-96 h-96 opacity-60" viewBox="0 0 400 400" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="grad2" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#38BDF8" stop-opacity="0.18" />
                        <stop offset="100%" stop-color="#14B8A6" stop-opacity="0.08" />
                    </linearGradient>
                </defs>
                <circle cx="200" cy="200" r="160" fill="url(#grad2)" />
            </svg>
            <svg class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[40rem] h-64 opacity-50" viewBox="0 0 800 200"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="grad3" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#FBBF24" stop-opacity="0.12" />
                        <stop offset="100%" stop-color="#14B8A6" stop-opacity="0.08" />
                    </linearGradient>
                </defs>
                <path d="M0,100 Q200,0 400,100 T800,100 V200 H0 Z" fill="url(#grad3)" />
            </svg>
            <svg class="absolute bottom-0 right-0 w-80 h-80 opacity-40" viewBox="0 0 320 320" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="grad4" cx="50%" cy="50%" r="80%" fx="50%" fy="50%">
                        <stop offset="0%" stop-color="#F472B6" stop-opacity="0.18" />
                        <stop offset="100%" stop-color="#A7F3D0" stop-opacity="0.05" />
                    </radialGradient>
                </defs>
                <ellipse cx="160" cy="160" rx="120" ry="100" fill="url(#grad4)" />
            </svg>
        </div>
        <div class="relative z-10 w-full max-w-3xl mx-auto flex flex-col items-center text-center">
            <x-svg name="logo" class="w-20 h-20 mb-6 drop-shadow-lg" />
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 tracking-tight leading-tight">
                AtendeJá<br>
                <span class="bg-gradient-to-r from-teal-500 to-green-400 bg-clip-text text-transparent">Sua fila, sem
                    espera</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-2xl mx-auto">
                Plataforma moderna para gestão de filas em clínicas e hospitais. Agilize o atendimento, reduza o tempo de
                espera e ofereça uma experiência premium para pacientes e equipes.
            </p>
            <div class="flex flex-col md:flex-row gap-4 justify-center mb-10">
                <a href="{{ route('login') }}">
                    <x-button type="primary" class="text-lg px-8 py-3 shadow-lg">Entrar</x-button>
                </a>
                <a href="{{ route('register') }}">
                    <x-button type="secondary" class="text-lg px-8 py-3">Criar conta</x-button>
                </a>
            </div>

            <div class="mt-12 opacity-80">
                <span class="text-black text-xs">&copy; {{ date('Y') }} AtendeJá. Todos os direitos reservados.</span>
            </div>
        </div>
    </div>
@endsection
