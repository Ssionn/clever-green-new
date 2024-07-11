<div class="mt-6 px-6">

    <nav class="flex flex-row justify-between items-center max-w-screen-lg mx-auto h-auto sm:h-20 p-6 bg-gray-50 border-gray-200 border-t rounded-t-xl rounded-b-none sm:rounded-md">
        <a href="{{ route('landingpage.index') }}">
            <img src="{{ asset('storage/images/logo.png') }}" class="h-auto w-auto" alt="CleverGreen"/>
        </a>

        <div class="hidden sm:inline-block">
            <ul class="space-x-6 inline-flex items-center">
                <x-landingpage.link.item
                    href="{{ route('landingpage.about') }}" :active="request()->routeIs('landingpage.about')">
                    {{ __('About Us') }}
                </x-landingpage.link.item>

                <x-landingpage.link.item
                    href="{{ route('landingpage.contact') }}" :active="request()->routeIs('landingpage.contact')">
                    {{ __('Contact Us') }}
                </x-landingpage.link.item>

                @if(Route::has('login'))
                    @auth
                        <a href="#">
                            <button type="button" class="px-4 py-2 bg-[#2A7F62] text-white rounded-lg align-middle">
                                <span>{{ __('Dashboard') }}</span>
                            </button>
                        </a>
                    @else
                        <a href="{{ route('login') }}">
                            <button type="button" class="px-4 py-2 bg-[#2A7F62] text-white rounded-lg align-middle">
                                <span>{{ __('Login') }}</span>
                            </button>
                        </a>
                    @endauth
                @endif
            </ul>
        </div>

        <div class="flex sm:hidden relative">
            <button type="button" id="dropdownHamburgerButton" data-dropdown-toggle="dropdown" aria-expanded="false">
                <x-icon-hamburger-menu class="w-6 h-6"/>
            </button>
        </div>
    </nav>

    <nav id="dropdown" class="absolute flex-col hidden h-auto w-full px-6">
        <div class="bg-gray-50 border-t border-gray-50 rounded-b-xl p-3">
            <ul class="space-y-3">
                <x-landingpage.link.item
                    href="{{ route('landingpage.about') }}" :active="request()->routeIs('landingpage.about')">
                    <div class="bg-white rounded-md p-4">
                            {{ __('About Us') }}
                    </div>
                </x-landingpage.link.item>
                <x-landingpage.link.item
                    href="{{ route('landingpage.contact') }}" :active="request()->routeIs('landingpage.contact')">
                    <div class="bg-white rounded-md p-4">
                            {{ __('Contact Us') }}
                    </div>
                </x-landingpage.link.item>
                <x-landingpage.link.item
                    href="#" :active="request()->routeIs('dashboard')">
                    <div class="bg-white rounded-md p-4">
                            {{ __('Dashboard') }}
                    </div>
                </x-landingpage.link.item>
            </ul>
        </div>
    </nav>
</div>
