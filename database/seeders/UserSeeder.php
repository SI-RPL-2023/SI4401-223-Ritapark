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
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Testing',
            'phone_number' => '081234567890',
            'email' => 'tes@gmail.com',
            'username' => 'testing',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'aa',
            'phone_number' => '081234567890',
            'email' => 'aa@gmail.com',
            'username' => 'aa',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'admin',
            'phone_number' => '081234567890',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);
    }
}
