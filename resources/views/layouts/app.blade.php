<!DOCTYPE html>
<html lang="pt-Ao">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('asses/js/tailwindcss.js') }}"></script>
    <title>@yield('title')</title>
</head>


<body class="font-sans text-gray-800">
    <div class="flex min-h-screen">
        @auth
            @if (auth()->check())
                @include('partials.sidebar', ['active' => $active ?? null])

                <div class="flex-1 flex flex-col min-h-screen" style="margin-left: 16rem;"> <!-- 16rem = w-64 sidebar -->
                    @include('partials.navbar')
            @endif
        @endauth
        <main class="flex-1 p-6">
            @if (session('success'))
                <x-flash type="success" :message="session('success')" />
            @endif
            @if (session('error'))
                <x-flash type="error" :message="session('error')" />
            @endif
            @yield('content')
        </main>
        @auth
            @if (auth()->check())
        </div>
        @endif
    @endauth
    </div>
</body>

</html>
