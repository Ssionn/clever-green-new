<div class="p-4">
    <h1 class="font-semibold text-center">
        All users
    </h1>

    <div class="relative items-center mt-4 overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 rtl:text-right">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-s-lg">
                        {{ __('dashboard/users/show-user.table.name') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('dashboard/users/show-user.table.email') }}

                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('dashboard/users/show-user.table.role') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('dashboard/users/show-user.table.verified_email') }}
                    </th>
                    @can('access actions')
                        <th scope="col" class="px-6 py-3 rounded-e-lg">
                            {{ __('dashboard/users/show-user.table.actions') }}
                        </th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="{{ $loop->even % 2 === 0 ? 'bg-white' : 'bg-gray-100' }}">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
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

                                    <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded-md">
                                        {{ __('dashboard/users/show-user.table.buttons.delete') }}
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
