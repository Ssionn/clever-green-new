<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-100 flex flex-col justify-between">
        <div>
            <a href="{{ route('auth.dashboard') }}" class="flex sm:justify-center items-center ps-2.5 mb-5">
                <img src="{{ asset('storage/images/logo.png') }}" class="h-auto me-3 sm:h-7" alt="Flowbite Logo" />
            </a>
            <ul class="space-y-2 font-medium">
                <li>
                    <x-dashboard.link.navbar-link href="{{ route('auth.dashboard') }}" :active="request()->routeIs('auth.dashboard')">
                        <x-icon-dashboard class="h-6 w-6"/>
                        <span class="ms-3 pt-[6px]">{{ __('dashboard/navbar.item.dashboard') }}</span>
                    </x-dashboard.link.navbar-link>
                </li>
                @can('visit users')
                    <li>
                        <x-dashboard.link.navbar-link href="{{ route('auth.dashboard.users') }}" :active="request()->routeIs('auth.dashboard.users')">
                            <x-icon-user class="h-6 w-6"/>
                            <span class="ms-3 pt-[6px]">{{ __('dashboard/navbar.item.users') }}</span>
                        </x-dashboard.link.navbar-link>
                    </li>
                @endcan
            </ul>
        </div>

        <div class="relative">
            <button id="profileButton" class="flex items-center w-full p-2 text-gray-900 rounded-lg hover:bg-gray-200 group">
                <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
                <span class="ms-3">{{ __('dashboard/navbar.item.profile') }}</span>
            </button>
            <div id="profileDropdown" class="hidden absolute bottom-full left-0 w-full bg-white border border-gray-200 rounded-md shadow-lg">
                {{-- Todo: Create dynamic link component for dropdown --}}

                <div>
                    <a href="{{ route('auth.dashboard.settings') }}" class="block w-full px-4 py-2 text-left text-gray-700 hover:bg-gray-100">
                        {{ __('dashboard/navbar.item.profile_dropdown.settings') }}
                    </a>
                </div>

                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full px-4 py-2 text-left text-gray-700 hover:bg-gray-100">
                            {{ __('dashboard/navbar.item.profile_dropdown.logout') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
