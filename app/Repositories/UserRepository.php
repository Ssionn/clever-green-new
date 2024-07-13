<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserRepository
{
    public function getAllUsersExceptCurrent()
    {
        return User::where('id', '!=', auth()->id())->get();
    }

    public function createUser($name, $email, $roleId): void
    {
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make('password'),
        ]);

        $role = Role::findById($roleId);

        $user->assignRole($role->name);
    }
}
