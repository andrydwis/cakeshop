<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex md:flex-row-reverse flex-wrap">

        <!--Sidebar-->
        <div class="sidebar-container ">
            <div class="md:mt-12 md:relative lg:px-6">
                <h2 class="hidden md:block text-white text-2xl">Lely Cake</h2>
                <ul class="md:mt-20 flex flex-row md:flex-col text-center md:text-left">

                    <li class="mr-3 flex-1">
                        <a href="#" class="link">
                            <svg class="w-6 md:w-10 pr-0 md:pr-3 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Informasi Kontak</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="#" class="active">
                            <svg class="w-6 md:w-10 pr-0 md:pr-3 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Katalog</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="#" class="link">
                            <svg class="w-6 md:w-10 pr-0 md:pr-3 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Produk</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--Main Content-->
        <div class="w-full md:w-4/5 bg-gray-100">
            <div class="container bg-gray-100 pt-16 px-6">
                <div class="grid">
                    <div class="place-items-center">
                        <h1 class="text-4xl">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>