<x-dashboard-layout>
    <div class="p-4 sm:ml-64">
        <h1 class="font-bold text-2xl mb-4 text-center sm:text-left">
            {{ __('dashboard/dashboard.navigated.links.users') }}
        </h1>

        <div class="flex flex-col lg:flex-row gap-4">
            @can('create users')
                <div class="bg-white rounded-xl shadow-xl border-t border-t-gray-100 lg:w-1/3">
                    @include('auth.dashboard.users.partials.create-user')
                </div>
            @endcan
            @can('show users')
                <div class="bg-white rounded-xl shadow-xl border-t border-t-gray-100 lg:w-2/3">
                    @include('auth.dashboard.users.partials.show-user')
                </div>
            @endcan
        </div>
    </div>
</x-dashboard-layout>
