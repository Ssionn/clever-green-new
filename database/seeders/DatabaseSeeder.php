<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $adminRole = Role::create(['name' => 'admin']);
        $agentRole = Role::create(['name' => 'agent']);
        $managerRole = Role::create(['name' => 'manager']);

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole($adminRole);

        $agent = User::create([
            'name' => 'Agent User',
            'email' => 'agent@example.com',
            'password' => Hash::make('password'),
        ]);

        $agent->assignRole($agentRole);

        $manager = User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
        ]);

        $manager->assignRole($managerRole);
    }
}
