<?php

namespace Database\Seeders;
use App\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTAblesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Munkhbaatar',
            'email' => 'muugitsomo2@gmail.com',
            'password' => Hash::make('passowrd'),
            'remember_token' => str_random(10)
        ]);
    }
}
