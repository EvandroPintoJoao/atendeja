@php
    $nav = [
        ['label' => 'Dashboard', 'icon' => 'home', 'route' => 'dashboard', 'url' => route('dashboard')],
        ['label' => 'Pacientes', 'icon' => 'users', 'route' => 'pacientes.index', 'url' => route('pacientes.index')],
        ['label' => 'Fila', 'icon' => 'queue', 'route' => 'fila.index', 'url' => route('fila.index')],
        [
            'label' => 'Atendimentos',
            'icon' => 'activity',
            'route' => 'atendimentos.index',
            'url' => route('atendimentos.index'),
        ],
        ['label' => 'Serviços', 'icon' => 'briefcase', 'route' => 'servicos.index', 'url' => route('servicos.index')],
        [
            'label' => 'Configurações',
            'icon' => 'settings',
            'route' => 'configuracoes.index',
            'url' => route('configuracoes.index'),
        ],
    ];
@endphp
<aside class="w-64 border-r flex flex-col min-h-screen fixed z-30 shadow-2xl">
    <div class="h-16 flex items-center px-6 font- text-2xl text-green-400 tracking-tight">
    </div>
    <nav class="flex-1 mt-4">
        <ul class="space-y-1">
            @foreach ($nav as $item)
                <li>
                    <a href="{{ $item['url'] }}"
                        class="flex items-center px-6 py-3  transition-colors {{ $active === $item['route'] ? 'bg-teal-100 text-teal-700 font-semibold' : 'hover:bg-gray-100 text-gray-700' }}">
                        <x-svg :name="$item['icon']"
                            class="w-5 h-5 mr-3 {{ $active === $item['route'] ? 'text-green-400' : 'text-gray-400' }}" />
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
