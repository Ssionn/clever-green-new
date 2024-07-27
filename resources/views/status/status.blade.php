@if ($errors->any())
    <div class="bg-white rounded-lg shadow-lg border-t border-t-gray-100 p-4">
        <strong class="font-bold text-red-500">{{ __('auth/login.error_handling.heading') }}</strong>
        <ul class="mt-2">
            @foreach ($errors->all() as $error)
                <li class="block text-red-500">- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Todo: Add these lines to translation --}}

@if (session('success'))
    <div class="border px-4 py-3 bg-green-100 rounded-lg" role="alert">
        <strong class="font-bold text-green-700">{{ __('Success!') }}</strong>
        <span class="block sm:inline text-green-700">{{ session('success') }}</span>
    </div>
@endif

@if (session('error'))
    <div class="border px-4 py-3 bg-red-100 rounded-lg" role="alert">
        <strong class="font-bold text-red-700">{{ __('Error!') }}</strong>
        <span class="block sm:inline text-red-700">{{ session('error') }}</span>
    </div>
@endif

@if (session('warning'))
    <div class="border px-4 py-3 bg-yellow-100 rounded-lg" role="alert">
        <strong class="font-bold text-yellow-700">{{ __('Warning:') }}</strong>
        <span class="block sm:inline text-yellow-700">{{ session('warning') }}</span>
    </div>
@endif

@if (session('info'))
    <div class="border px-4 py-3 bg-blue-100 rounded-lg" role="alert">
        <strong class="font-bold text-blue-700">{{ __('Tip:') }}</strong>
        <span class="block sm:inline text-blue-700">{{ session('info') }}</span>
    </div>
@endif

@if (session('status') == 'verification-link-sent')
    <div class="border px-4 py-3 bg-emerald-100 rounded-lg text-emerald-green-500" role="alert">
        A new email verification link has been emailed to you!
    </div>
@endif
