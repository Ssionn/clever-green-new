<?php

namespace App\Repositories;

use App\Mail\NewUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class UserRepository
{
    public function getAllUsersExceptCurrent()
    {
        return User::whereNot('id', auth()->id())
            ->orderBy('name')
            ->paginate(5);
    }

    public function createUser($name, $email, $roleId): void
    {
        $randomPassword = Str::random(16);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($randomPassword),
        ]);

        $role = Role::findById($roleId);

        $user->assignRole($role->name);

        $this->notifyNewUser($user, $randomPassword);
    }

    protected function notifyNewUser($user, $randomPassword): void
    {
        Mail::to($user->email)->send(new NewUser($user, $randomPassword));
    }
}
