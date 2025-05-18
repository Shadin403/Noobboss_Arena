<div>
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-gray-900/90 backdrop-blur-md z-50 transform translate-x-0 md:translate-x-0 transition-transform duration-300"
        id="sidebar">
        <div class="p-4">
            <h1 class="text-2xl font-bold text-white">Admin Panel</h1>
        </div>
        <nav class="mt-4">
            <a href="{{ route('main') }}" wire:navigate
                class="block py-2 px-4 text-white nav-link {{ request()->routeIs('main') ? 'bg-gray-700' : '' }}">Dashboard</a>
            <a class="block py-2 px-4 text-white hover:bg-gray-700 nav-link">Users</a>
            <a class="block py-2 px-4 text-white hover:bg-gray-700 nav-link ">Transactions</a>
            <a href="{{ route('tournaments') }}"
                class="block py-2 px-4 text-white hover:bg-gray-700 nav-link {{ request()->routeIs('tournaments') ? 'bg-gray-700' : '' }}">Tournaments</a>
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
</div>
