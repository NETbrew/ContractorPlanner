<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description ?? 'Welcome to constructPlanner' }}">
    <title>constructPlanner | {{ $title ?? 'dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-50 antialiased">
<main>
    @livewire('dashboard-nav')
    <!-- Content -->
    <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
        {{$slot}}
    </div>
</main>
</body>
</html>
