<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@mail.com',
                'password' => Hash::make('Admin@12345'),
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@mail.com',
                'password' => Hash::make('Admin@12345'),
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        User::insert($users);
    }
}
