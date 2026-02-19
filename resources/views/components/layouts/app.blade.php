<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Scanner') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="flex min-h-screen bg-gray-100">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white min-h-screen">
        @include('partials.sidebar')
    </aside>

    <!-- Main content area -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-gray-200 p-4 shadow">
            @include('partials.header')
        </header>

        <!-- Page content -->
        <main class="flex-1 p-4">
        </main>
    </div>

    @livewireScripts
</body>
</html>
