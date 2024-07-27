<div class="p-2">
    <h1 class="font-semibold text-center">
        Create User
    </h1>

    @include('status.status')

    <div class="p-4">
        <form method="POST" action="{{ route('auth.dashboard.users.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm text-gray-800">
                    {{ __('dashboard/users/create-user.form.inputs.name') }}
                </label>
                <div>
                    <input name="name" id="name" type="text" class="w-full px-4 py-3 text-sm text-gray-800 border border-gray-300 rounded-md outline-blue-600 placeholder:text-gray-400" />
                </div>
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm text-gray-800">
                    {{ __('dashboard/users/create-user.form.inputs.email') }}
                </label>
                <div>
                    <input name="email" id="email" type="email" class="w-full px-4 py-3 text-sm text-gray-800 border border-gray-300 rounded-md outline-blue-600 placeholder:text-gray-400" />
                </div>
            </div>

            <div>
                <label for="role" class="block mb-2 text-sm text-gray-800">
                    {{ __('dashboard/users/create-user.form.inputs.select_role') }}
                </label>
                <div>
                    <select name="role" id="role" class="w-full px-4 py-3 text-sm text-gray-800 border border-gray-300 rounded-md outline-blue-600 placeholder:text-gray-400">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">
                                {{ ucfirst($role->name) }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="!mt-8">
                <button type="submit" class="w-full px-4 py-3 text-sm tracking-wide text-white rounded-lg bg-emerald-600 hover:bg-blue-700 focus:outline-none">
                    {{ __('dashboard/users/create-user.form.buttons.create') }}
                </button>
            </div>
        </form>
    </div>
</div>
