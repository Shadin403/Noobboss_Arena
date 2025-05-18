<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="stylesheet" href="{{ asset('admin_statics/css/styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    @livewireStyles
</head>

<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white">

    @livewire('components.sidebar')
    {{ $slot }}

    <script src="{{ asset('admin_statics/js/script.js') }}"></script>
    @livewireScripts
</body>

</html>
