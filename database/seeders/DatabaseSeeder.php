<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'visit users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'show users']);
        Permission::create(['name' => 'access actions']);

        $role = Role::create(['name' => 'agent']);
        $role->givePermissionTo([]);

        $role = Role::create(['name' => 'manager']);
        $role->givePermissionTo(['visit users', 'show users']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole('admin');

        $manager = User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@manager.com',
            'password' => Hash::make('password'),
        ]);

        $manager->assignRole('manager');

        $agent = User::factory()->create([
            'name' => 'agent',
            'email' => 'agent@agent.com',
            'password' => Hash::make('password'),
        ]);

        $agent->assignRole('agent');
    }
}
