<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Creating default user
        User::create([
            'name'  => 'Lara8 Ajax Crud',
            'email' =>  'system@email.com',
            'password' => Hash::make('password')
        ]);
    }
}
