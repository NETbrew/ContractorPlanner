<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description ?? 'Welcome to constructPlanner' }}">
    <title>constructPlanner | {{ $title ?? 'home' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="flex flex-col space-y-4 min-h-screen text-gray-800 bg-gray-100">
    <header class="shadow bg-white/70 sticky inset-0 backdrop-blur-sm z-10">
        {{--  Navigation  --}}
        @livewire('navigation-menu')


    </header>
    <main>
        {{-- Main content --}}
        {{$slot}}
    </main>
    <footer class="container mx-auto p-4 text-sm border-t flex justify-between items-center">
        <div>The Vinyl Shop - © {{ date('Y') }}</div>
        <div>Build with Laravel {{ app()->version() }}</div>
    </footer>
</div>
</body>
</html>
