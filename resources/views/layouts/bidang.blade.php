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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</head>

<body class="font-sans antialiased">

    <div class="relative min-h-screen md:flex" x-data="{ open: true }">
        <!-- Sidebar -->
        <x-sidebar-bidang />

        <!-- Main Content -->
        <main class="flex-grow">
            <nav>
                <!-- Page Heading -->
                @include('layouts.header-bidang')

            </nav>
            <div>
                {{ $slot }}
            </div>

        </main>




    </div>
    <footer class="bg-blue-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p class="text-sm">
                © 2024 Inspektorat DIY.
            </p>
        </div>
    </footer>
</body>

</html>
