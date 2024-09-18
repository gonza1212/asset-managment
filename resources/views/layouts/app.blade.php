<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
        @laravelPWA
    </head>
    <body class="bg-white dark:bg-gray-900 font-sans antialiased flex">
        @include('layouts.navigation', ['user' => \Auth::user()])

        <div class="flex flex-col w-screen">
            <!-- Page Heading -->
            @isset($header)
                <header class="z-10 fixed w-full shadow-md bg-custom-gray-blue dark:bg-custom-dark-blue">
                    <div class="mx-auto py-3 px-4 sm:px-6 lg:px-8 text-center flex justify-center flex-wrap flex-col content-stretch h-[60px]">
                        {{ $header }}
                    </div>
                </header>
            @endisset
            <!-- Page Content -->
            <main class="mt-16 lg:ml-64 sm:ml-0 xs:ml-0">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
