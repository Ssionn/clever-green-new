<x-dashboard-layout>
    <div class="p-4 sm:ml-64">
        <h1 class="font-bold text-2xl text-center sm:text-left">
            {{ __('dashboard/dashboard.navigated.links.dashboard') }}
        </h1>
    </div>

    <div class="p-4 sm:ml-64">
        <div class="container mx-auto max-w-5xl">
            @if(! auth()->user()->hasVerifiedEmail())
                @include('auth.verify-email')
            @endif

        </div>
    </div>
</x-dashboard-layout>
