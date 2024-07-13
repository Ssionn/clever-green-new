<div class="p-4">
    <h1 class="text-center font-semibold">
        All users
    </h1>

    <div class="relative overflow-x-auto mt-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-s-lg">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Verified Email
                    </th>
                    @can('access actions')
                        <th scope="col" class="px-6 py-3 rounded-e-lg">
                            Actions
                        </th>
                    @endcan
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->getRoleNames()->first() }}
                    </td>
                    <td class="px-6 py-4">
                        @if($user->hasVerifiedEmail())
                            ✅
                        @else
                            ❌
                        @endif
                    </td>
                    @can('access actions')
                        <td class="px-6 py-4">
                            <form action="{{ route('auth.dashboard.users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    X
                                </button>
                            </form>
                        </td>
                    @endcan
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
