<x-dashboard-layout>
    <div class="p-4 sm:ml-64">
        <h1 class="font-bold text-2xl">
            {{ __('dashboard/dashboard.navigated.links.settings') }}
        </h1>
    </div>

    <div class="p-4 sm:ml-64">
        <div class="container mx-auto max-w-5xl">
            <div class="flex flex-col justify-center">
                <div class="w-full md:w-3/4 lg:w-2/3 p-8 rounded-md shadow-md border-t border-t-gray-100">
                    @include('auth.dashboard.settings.partials.change-password')
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
