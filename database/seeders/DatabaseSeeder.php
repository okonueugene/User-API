<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'This User', 
            'email' => 'user@example.com',
            'password' =>'thispassword',
        ]);
        $user1 = User::create([
            'name' => 'This User1', 
            'email' => 'user1@example.com',
            'password' =>'thispassword',
        ]);
        $user2 = User::create([
            'name' => 'This User2', 
            'email' => 'user2@example.com',
            'password' =>'thispassword',
        ]);
        $user3 = User::create([
            'name' => 'This User3', 
            'email' => 'user3@example.com',
            'password' =>'thispassword',
        ]);
        $user4 = User::create([
            'name' => 'This User4', 
            'email' => 'user4@example.com',
            'password' =>'thispassword',
        ]);
        $user5 = User::create([
            'name' => 'This User5', 
            'email' => 'user5@example.com',
            'password' =>'thispassword',
        ]);
        $user6 = User::create([
            'name' => 'This User6', 
            'email' => 'user6@example.com',
            'password' =>'thispassword',
        ]);
        $user7 = User::create([
            'name' => 'This User7', 
            'email' => 'user7@example.com',
            'password' =>'thispassword',
        ]);
        $user8 = User::create([
            'name' => 'This User8', 
            'email' => 'user8@example.com',
            'password' =>'thispassword',
        ]);

    }
}
