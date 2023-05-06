<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head />
</head>

<body class="bg-gray-100"> 
    <x-partials.nav />
    <div class="mb-8 font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>
    <x-partials.footer />
    <livewire:scripts />
</body>
</html>
