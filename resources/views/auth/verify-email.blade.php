<div class="w-full md:w-3/4 lg:w-2/3 bg-white rounded-md border-t border-t-gray-100 shadow-xl p-4">
    <div class="mb-3">@include('status.status')</div>
    <span>
        It seems you have not verified your email. Please click here to verify.
    </span>
    <form action="{{ route('verification.send') }}" method="POST" class="flex justify-center mt-2">
        @csrf

        <button class="underline text-emerald-500" type="submit">
            {{ __('Verify Email') }}
        </button>
    </form>
</div>
