<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AutoTrans</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])
</head>

<body class="w-full min-h-screen bg-gray-200">

    @include('components.header')
    <nav class="w-full min-h-12 bg-white px-20 shadow-md">
        <ul class="grid grid-cols-4 items-center min-h-12 gap-5">
            <li class="border-x-2 border-gray-200 px-2">
                <a href="{{ route('cars.index') }}">
                    <div
                        class="transition-all hover:bg-gray-200 px-4 py-1 flex items-center rounded opacity-70 hover:!opacity-100">
                        <p class="text-xl font-semibold mx-auto my-0">
                            Авто в наличии
                        </p>
                    </div>
                </a>
            </li>
            <li class="border-x-2 border-gray-200 px-2">
                <a href="{{ route('favourite.index') }}">
                    <div
                        class="transition-all hover:bg-gray-200 px-4 py-1 flex items-center rounded opacity-70 hover:!opacity-100">
                        <p class="text-xl font-semibold mx-auto my-0">
                            Избранное
                        </p>
                    </div>
                </a>
            </li>
            <li class="border-x-2 border-gray-200 px-2">
                <a href="{{ route('comment.index') }}">
                    <div
                        class="transition-all hover:bg-gray-200 px-4 py-1 flex items-center rounded opacity-70 hover:!opacity-100">
                        <p class="text-xl font-semibold mx-auto my-0">
                            Отзывы
                        </p>
                    </div>
                </a>
            </li>
            <li class="border-x-2 border-gray-200 px-2">
                <a href="{{ route('index') }}">
                    <div
                        class="transition-all hover:bg-gray-200 px-4 py-1 flex items-center rounded opacity-70 hover:!opacity-100">
                        <p class="text-xl font-semibold mx-auto my-0">
                            О нас
                        </p>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
    <main class="py-5 main">
        {{ $slot }}
    </main>
    @include('components.footer')
</body>

</html>
