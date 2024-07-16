<div class="p-4">
    <h1 class="text-center font-semibold">
        Create User
    </h1>

    <div class="p-8">
        <form method="POST" action="{{ route('auth.dashboard.users.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="text-gray-800 text-sm mb-2 block">
                    {{ __('dashboard/users/create-user.form.inputs.name') }}
                </label>
                <div>
                    <input name="name" id="name" type="text" class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" />
                </div>
            </div>

            <div>
                <label for="email" class="text-gray-800 text-sm mb-2 block">
                    {{ __('dashboard/users/create-user.form.inputs.email') }}
                </label>
                <div>
                    <input name="email" id="email" type="email" class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400" />
                </div>
            </div>

            <div>
                <label for="role" class="text-gray-800 text-sm mb-2 block">
                    {{ __('dashboard/users/create-user.form.inputs.select_role') }}
                </label>
                <div>
                    <select name="role" id="role" class="w-full text-gray-800 text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600 placeholder:text-gray-400">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">
                                {{ ucfirst($role->name) }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Todo: Password generation implementation --}}

            <div class="!mt-8">
                <button type="submit" class="w-full py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-emerald-600 hover:bg-blue-700 focus:outline-none">
                    {{ __('dashboard/users/create-user.form.buttons.create') }}
                </button>
            </div>
        </form>
    </div>
</div>
