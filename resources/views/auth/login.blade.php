<x-auth-layout>
    <div class="bg-gray-50 font-[sans-serif]">
        <div class="min-h-screen flex flex-col items-center justify-center py-6 px-4">
            <div class="max-w-md w-full">
                <a href="{{ route('landingpage.index') }}">
                    <img
                        src="{{ asset('storage/images/logo.png') }}"
                        alt="logo"
                        class='w-40 mb-8 mx-auto block'
                    />
                </a>

                @if ($errors->any())
                    <div class="border px-4 py-3 rounded-xl mb-4" role="alert">
                        <strong class="font-bold text-red-500">{{ __('auth/login.error_handling.heading') }}</strong>
                        <span class="block sm:inline text-red-500">{{ $errors->first() }}</span>
                    </div>
                @endif

                <div class="p-8 rounded-2xl bg-white shadow">
                    <h2 class="text-gray-800 text-center text-2xl font-bold">
                        {{ __('auth/login.heading') }}
                    </h2>

                    <form class="mt-8 space-y-4" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">
                                {{ __('auth/login.form.email') }}
                            </label>
                            <div class="relative flex items-center">
                                <input name="email" id="email" type="email" required class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" placeholder="johndoe@example.com" />
                            </div>
                        </div>

                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">
                                {{ __('auth/login.form.password') }}
                            </label>
                            <div class="relative flex items-center">
                                <input name="password" id="password" type="password" required class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" placeholder="•••••••••" />
                            </div>
                        </div>

                        <div class="!mt-8">
                            <button type="submit" class="w-full py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-emerald-600 hover:bg-blue-700 focus:outline-none">
                                {{ __('auth/login.heading') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
