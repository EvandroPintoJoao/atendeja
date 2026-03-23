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
<aside class="w-64 border-r flex flex-col min-h-screen fixed z-30 shadow-2xl bg-gray-00">
    <div class="h-16 flex items-center px-6 font- text-2xl text-green-400 tracking-tight border-2 border-white">
        <x-svg name="logo" class="w-8 h-8 mr-2" />
        <span class="font-bold">AtendeJá</span>
    </div>
    <nav class="flex-1 mt-4  border-2 border-white">
        <ul class="space-y-1">
            @foreach ($nav as $item)
                <li>
                    <a href="{{ $item['url'] }}"
                        class="flex items-center px-6 py-3  transition-colors {{ $active === $item['route'] ? ' text-teal-700 font-semibold' : 'hover:bg-gray-100 text-gray-700' }}">
                        <x-svg :name="$item['icon']"
                            class="w-5 h-5 mr-3 {{ $active === $item['route'] ? 'text-green-900' : 'text-gray-400' }}" />
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-4 py- text-gray-700 hover:bg-gray-100">Sair</button>
                </form>
            </li>

        </ul>
    </nav>
</aside>
