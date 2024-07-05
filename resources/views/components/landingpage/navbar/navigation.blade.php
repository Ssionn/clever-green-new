<div class="mt-4"/>
<nav class="flex flex-row justify-between items-center max-w-screen-lg mx-auto h-auto sm:h-20 p-6 bg-gray-50 border-gray-200 border-t rounded-t-xl rounded-b-none sm:rounded-md">
    <a href="{{ route('landingpage.index') }}">
        <img src="{{ asset('images/logo.png') }}"/>
    </a>

    <div class="hidden sm:inline-flex">
        <ul class="space-x-6 inline-flex">
            <x-landingpage.link.item
                href="#" :active="request()->routeIs('landingpage.about')">
                {{ __('About Us') }}
            </x-landingpage.link.item>
            <x-landingpage.link.item
                href="#" :active="request()->routeIs('landingpage.contact')">
                {{ __('Contact Us') }}
            </x-landingpage.link.item>
        </ul>
    </div>

    <div class="flex sm:hidden relative">
        <button type="button" aria-expanded="false">
            <x-icon-hamburger-menu class="w-6 h-6"/>
        </button>
    </div>
</nav>

<nav class="absolute flex flex-col sm:hidden h-auto rounded-b-xl w-11/12" id="dropdownHamburger">
    <div class="bg-gray-50 border-t border-gray-50 p-4">
        <ul class="space-y-3 p-2">
            <x-landingpage.link.item
                href="#" :active="request()->routeIs('landingpage.about')">
                <div class="bg-white rounded-md p-4">
                        {{ __('About Us') }}
                </div>
            </x-landingpage.link.item>
            <x-landingpage.link.item
                href="#" :active="request()->routeIs('landingpage.contact')">
                <div class="bg-white rounded-md p-4">
                        {{ __('Contact Us') }}
                </div>
            </x-landingpage.link.item>
        </ul>
    </div>
</nav>
