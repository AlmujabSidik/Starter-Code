<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@localhost.com',
            'bio' => 'Akun untuk manajemen aplikasi',
            'occupation' => 'Backend Developer',
            'phone' => '081234567890',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost.com',
            'bio' => 'Akun untuk manajemen aplikasi',
            'occupation' => 'Backend Developer',
            'phone' => '081234567890',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
    }
}
