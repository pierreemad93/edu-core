<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => "Jhon Doe",
                'email' => "student@gmail.com",
                'password' => Hash::make("123456789"),
                'role' => 'student',
            ],
            [
                'name' => "instructor",
                'email' => "instructor@gmail.com",
                'password' => Hash::make("123456789"),
                'role' => 'instructor',
            ],
        ];
        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], [
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => $user['role'],

            ]);
        }
    }
}
