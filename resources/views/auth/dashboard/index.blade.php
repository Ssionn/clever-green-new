<x-dashboard-layout>
    <div class="p-4 sm:ml-64">
       <div class="p-4 bg-white shadow-xl border-gray-100 border-t rounded-lg">
            <h1 class="font-bold text-xl">
                {{ __('dashboard/dashboard.heading', ['user' => auth()->user()->name]) }}
            </h1>
       </div>
    </div>
</x-dashboard-layout>
