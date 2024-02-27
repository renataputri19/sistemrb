<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create two dummy users
        User::create([
            'username' => 'rb2171',
            'password' => 'rb2171',
            'admin' => false,
        ]);

        User::create([
            'username' => 'subuh2171',
            'password' => 'subuh2171',
            'admin' => true,
        ]);



        // User::create([
        //     'username' => 'user1',
        //     'password' => 'password1',
        //     'admin' => false,
        // ]);

        // User::create([
        //     'username' => 'admin',
        //     'password' => 'adminpassword',
        //     'admin' => true,
        // ]);

        // User::create([
        //     'username' => 'newuser',
        //     'password' => 'tesuser', // This will be automatically hashed
        //     'admin' => false,
        // ]);
    }
}
