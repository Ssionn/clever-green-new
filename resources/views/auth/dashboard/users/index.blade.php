<x-dashboard-layout>
    <div class="p-4 sm:ml-64">
        <h1 class="mb-4 text-2xl font-bold text-center sm:text-left">
            {{ __('dashboard/dashboard.navigated.links.users') }}
        </h1>

        {{-- Todo: fix styling, breaks create user component due to table extending --}}

        <div class="grid gap-4 lg:grid-cols-3">
            @can('create users')
                <div class="bg-white border-t shadow-xl rounded-xl border-t-gray-100 lg:col-span-1">
                    @include('auth.dashboard.users.partials.create-user')
                </div>
            @endcan

            @can('show users')
                <div class="p-4 bg-white border-t shadow-xl rounded-xl border-t-gray-100 lg:col-span-2">
                    @include('auth.dashboard.users.partials.show-user')

                    <div class="relative p-4">
                        <div class="absolute inset-x-0 bottom-0">
                            {{ $users->links('pagination::custom-pagination') }}
                        </div>
                    </div>
                </div>
            @endcan
        </div>
    </div>
</x-dashboard-layout>

