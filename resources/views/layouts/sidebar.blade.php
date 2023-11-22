<aside x-data="{ open: false }"
       class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-800 transition-transform duration-300 ease-in-out transform sm:translate-x-0 h-full"
       :class="{ '-translate-x-full': !open, 'translate-x-0': open }">

    <img class="w-full" src="{{ asset('connect_asset_management_logo.jpeg') }}" alt="Logo" />
    
    <!-- Sidebar Content -->
    <div class="flex flex-col h-full py-4">
        <!-- Your Sidebar Content Goes Here -->
        <a href="/dashboard" class="text-gray-300 hover:text-white px-6 py-3">Dashboard</a>
        <a href="/agents" class="text-gray-300 hover:text-white px-6 py-3">Agents</a>
        <a href="/brokerages" class="text-gray-300 hover:text-white px-6 py-3">Brokerages</a>
        <a href="/client-lists" class="text-gray-300 hover:text-white px-6 py-3">Client Lists</a>
        <a href="/commission-triggers" class="text-gray-300 hover:text-white px-6 py-3">Commission Triggers</a>

        <!-- Profile and Logout Links -->
        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-responsive-nav-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</aside>
