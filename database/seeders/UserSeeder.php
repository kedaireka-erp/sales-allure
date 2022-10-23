<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default credentials

        Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'Sales']);

        User::create([

            'name' => 'Left4code',
            'email' => 'midone@left4code.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'male',
            'active' => 1,
            'remember_token' => Str::random(10)

        ])->assignRole('Admin');

        User::create([
            'name' => 'Samantha',
            'email' => 'sales@sales.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => 'female',
            'active' => 1,
            'remember_token' => Str::random(10)
        ])->assignRole('Sales');

        // Fake users
        User::factory()->times(9)->create();
    }
}
