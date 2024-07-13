<x-dashboard-layout>
    <div class="p-4 sm:ml-64">
        <h1 class="font-bold text-2xl">
            {{ __('dashboard/dashboard.navigated.users_page') }}
        </h1>
    </div>

    <div class="p-4 sm:ml-64">
        <div class="flex flex-col md:flex-none sm:grid sm:grid-cols-3 gap-2">
            @can('create users')
                <div class="bg-white rounded-xl shadow-xl border-t border-gray-200 sm:col-span-1">
                    @include('auth.dashboard.users.partials.create-user')
                </div>
            @endcan
            @can('show users')
                <div class="bg-white rounded-xl shadow-xl border-t border-gray-200 sm:col-span-2">
                    @include('auth.dashboard.users.partials.show-user')
                </div>
            @endcan
        </div>
    </div>
</x-dashboard-layout>
