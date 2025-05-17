<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('title')</title>
    <link rel="stylesheet" href="{{ asset('admin_statics/css/styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    @livewireStyles
</head>

<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-gray-900/90 backdrop-blur-md z-50 transform translate-x-0 md:translate-x-0 transition-transform duration-300"
        id="sidebar">
        <div class="p-4">
            <h1 class="text-2xl font-bold text-white">Admin Panel</h1>
        </div>
       <nav class="mt-4">
            <a href="{{ route('main') }}" class="block py-2 px-4 text-white bg-gray-700 nav-link">Dashboard</a>
            <a href="{{ route('users') }}" class="block py-2 px-4 text-white hover:bg-gray-700 nav-link">Users</a>
            <a href="{{ route('transactions') }}" class="block py-2 px-4 text-white hover:bg-gray-700 nav-link">Transactions</a>
            <a href="{{ route('tournaments') }}" class="block py-2 px-4 text-white hover:bg-gray-700 nav-link">Tournaments</a>
            <a href="/" class="block py-2 px-4 text-white hover:bg-gray-700 nav-link">Back to Site</a>
        </nav>
        <!-- Hamburger for Mobile -->
        <button id="sidebar-toggle" class="md:hidden absolute top-4 right-4 text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    {{-- main content will go here --}}
    @yield('body')
    {{-- main content will go here --}}

    <script src="{{ asset('admin_statics/js/script.js') }}"></script>
    @livewireScripts
</body>

</html>
