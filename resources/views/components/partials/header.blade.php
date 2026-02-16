<header class="bg-white shadow-sm border-b-4 border-university-red sticky top-0 z-10"
    x-data="{ userMenuOpen: false }">
    
    <div class="flex justify-between items-center py-4 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-4">
            <button @click="sidebarOpen = !sidebarOpen"
                class="text-gray-500 hover:text-gray-700 focus:outline-none md:hidden transition-colors">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <h1 class="text-xl font-semibold text-gray-800">Document Hub</h1>
        </div>

        <div class="flex items-center space-x-4">
            <div class="relative">
                <button @click="userMenuOpen = !userMenuOpen"
                    class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 focus:outline-none transition-colors">
                    <div class="h-8 w-8 rounded-full bg-university-red text-white flex items-center justify-center font-semibold text-sm">
                        {{ strtoupper(substr(auth()->user()->first_name, 0, 1) . substr(auth()->user()->last_name, 0, 1)) }}
                    </div>
                    <span class="hidden sm:block text-sm font-medium">{{ auth()->user()->full_name }}</span>
                    <svg class="h-4 w-4 hidden sm:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="userMenuOpen"
                    @click.away="userMenuOpen = false"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50"
                    style="display: none;">
                    
                    <div class="px-4 py-2 border-b border-gray-100">
                        <p class="text-sm font-medium text-gray-900">{{ auth()->user()->full_name }}</p>
                        <p class="text-xs text-gray-500 truncate">{{ auth()->user()->email }}</p>
                    </div>
                    
                    <a wire:navigate href="{{ route("profile") }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <hr class="my-1">
                    
                    <button type="button"
                        @click="userMenuOpen = false; logoutModalOpen = true"
                        class="w-full text-left block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>