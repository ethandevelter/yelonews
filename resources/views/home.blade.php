<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Adalace - Web Apps & Website Creation | Easy CMS Solutions</title>
        <meta name="description" content="Adalace offers professional web app and website development services, along with an intuitive CMS for easy website creation. Boost your online presence with our expert solutions.">
        <meta name="keywords" content="web app development, website creation, CMS, easy website builder, Adalace, professional web development">
        <link rel="shortcut icon" href="{{ asset('/assets/A black.svg') }}">

        <!-- Open Graph Meta Tags for social sharing -->
        <meta property="og:title" content="Adalace - Web Apps & Website Creation | Easy CMS Solutions">
        <meta property="og:description" content="Adalace offers professional web app and website development services, along with an intuitive CMS for easy website creation. Boost your online presence with our expert solutions.">
        <meta property="og:image" content="{{ asset('/assets/Adalace White.svg') }}">
        <meta property="og:url" content="https://yourwebsite.com">
        <meta property="og:type" content="website">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Adalace - Web Apps & Website Creation | Easy CMS Solutions">
        <meta name="twitter:description" content="Adalace offers professional web app and website development services, along with an intuitive CMS for easy website creation. Boost your online presence with our expert solutions.">
        <meta name="twitter:image" content="{{ asset('/assets/Adalace White.svg') }}">

        <link rel="shortcut icon" href="{{ asset('/assets/A black.svg') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
</head>
<body>
    <div class="w-full h-screen flex items-center justify-center bg-gradient-darkest-to-darker p-hero">
        <div class="text-center">
            <img class="h-12 !mb-14 block m-auto" src="{{ asset('/assets/Adalace White.svg') }}" alt="Pipuer Icon">
            <h1 class="text-lg font-thin text-white opacity-40">Keep your posts updated.</h1>
            <a class="text-xs font-black text-white opacity-40 border-t border-b border-white py-2 px-20 hover:bg-g-dark hover:text-white hover:opacity-100 duration-300 p-hero-action !absolute !bottom-5 !left-0 !right-0 !m-auto !w-fit">Upcoming</a>
    </div>
    </div>
    <div class="hidden opacity-0">
        <x-app-layout>
        </x-app-layout>
    </div>
</body>
</html>