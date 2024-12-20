<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50"  >

                    <x-topnav />
                    <div class="relative h-screen  overflow-hidden">


                        <video autoplay muted loop class="w-screen h-screen object-cover absolute top-0 left-0 z-0">
                            <source src="{{ asset('assets/videos/main.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="absolute content-center justify-end translate-y-2 text-white text-center z-10  ">
                            <h1 class="animated-text text-green-600 font-bold text-6xl ">Welcome to Find Your Trainer</h1>
                            <a href=" {{route('login')}}">
                            <button class="bg-white text-black cursor-pointer text-xl" onclick="@">JOIN US</button>

                            </a>
                        </div>
                    </div>


    </body>
</html>
