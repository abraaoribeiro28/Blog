<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Root',
            'email' => 'root@root.com',
            'password' => Hash::make('123123'),
        ]);

        $role = Role::create(['name' => 'Super Admin']);
        $user->assignRole($role);
    }
}
