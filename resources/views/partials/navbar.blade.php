<header
    class="sticky top-0 z-20 bg-white border-b border-gray-200 h-16 flex items-center px-6 justify-between shadow-sm">
    <div class="flex items-center gap-4">
        <button class="lg:hidden text-gray-500 hover:text-teal-600 focus:outline-none" aria-label="Abrir menu">
            <!-- Hamburger icon -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <h1 class="text-xl  text-gray-800">@yield('title', 'AtendeJá')</h1>
    </div>
    <div class="flex items-center gap-4">
        <form class="hidden md:block">
            <input type="text" placeholder="Pesquisar..."
                class="border border-gray-200 px-3 py-2 text-sm focus:ring-2 focus:ring-teal-200 focus:outline-none"
                aria-label="Pesquisar">
        </form>
        <button class="relative text-gray-500 hover:text-teal-600 focus:outline-none" aria-label="Notificações">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5">3</span>
        </button>
        <div class="relative group">
            <button class="flex items-center gap-2 focus:outline-none">
                <span
                    class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600">U</span>
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div
                class="absolute right-0 mt-2 w-48 bg-white border border-gray-200  shadow-lg py-2 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-opacity z-40">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perfil</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Configurações</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-4 py- text-gray-700 hover:bg-gray-100">Sair</button>
                </form>
            </div>
        </div>
    </div>
</header>

