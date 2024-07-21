<div>
    <h1 class="font-bold text-lg">
        Change password
    </h1>
</div>

<form method="POST" action="{{ route('auth.dashboard.settings.updatePassword') }}">
    @csrf

    <div class="space-y-4">
        @if (auth()->user()->hasVerifiedEmail())
            <div>
                <label for="email" class="text-gray-800 text-sm mb-2 block">
                    {{ __('dashboard/settings/change-password.form.inputs.email') }}
                </label>
                <div>
                    <input name="email" id="email" type="email" value="{{ old('email', auth()->user()->email) }}" class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" />
                </div>
            </div>

            <div>
                <label for="current_password" class="text-gray-800 text-sm mb-2 block">
                    {{ __('dashboard/settings/change-password.form.inputs.current_password') }}
                </label>
                <div>
                    <input name="current_password" id="current_password" type="password" class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" />
                </div>
            </div>

            <div>
                <label for="password" class="text-gray-800 text-sm mb-2 block">
                    {{ __('dashboard/settings/change-password.form.inputs.new_password') }}
                </label>
                <div>
                    <input name="password" id="password" type="password" class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" />
                </div>
            </div>

            <div class="flex items-center w-full justify-end">
                <button class="py-2 px-4 rounded-md bg-emerald-500 text-white" type="submit">
                    {{ __('dashboard/settings/change-password.form.buttons.save') }}
                </button>
            </div>
        @else
            <div class="opacity-50 pointer-events-none select-none cursor-not-allowed" aria-disabled="true">
                <div>
                    <label for="email" class="text-gray-800 text-sm mb-2 block">
                        {{ __('dashboard/settings/change-password.form.inputs.email') }}
                    </label>
                    <div>
                        <input name="email" id="email" type="email" class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" />
                    </div>
                </div>

                <div>
                    <label for="current_password" class="text-gray-800 text-sm mb-2 block">
                        {{ __('dashboard/settings/change-password.form.inputs.current_password') }}
                    </label>
                    <div>
                        <input name="current_password" id="current_password" type="password" class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" />
                    </div>
                </div>

                <div>
                    <label for="password" class="text-gray-800 text-sm mb-2 block">
                        {{ __('dashboard/settings/change-password.form.inputs.new_password') }}
                    </label>
                    <div>
                        <input name="password" id="password" type="password" class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" />
                    </div>
                </div>

                <div class="flex items-center w-full justify-end">
                    <button class="py-2 px-4 rounded-md bg-emerald-500" type="submit">
                        {{ __('dashboard/settings/change-password.form.buttons.save') }}
                    </button>
                </div>
            </div>
        @endif
    </div>
</form>
