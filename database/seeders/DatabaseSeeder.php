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
            'name' => 'Felix Mutinda', 
            'email' => 'admin@admin.com',
            'password' =>'thispassword',
        ]);

    }
}
