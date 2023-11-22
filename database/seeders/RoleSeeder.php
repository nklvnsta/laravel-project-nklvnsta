<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Anastasia', 
            'email'=> 'nastanikol10105@gmail.ru',
            'password' => Hash::make(123456),
            'role'=> 'moderator'
        ]);
        User::create([
            'name' => 'Anastasia', 
            'email'=> 'reader_2@gmail.ru',
            'password' => Hash::make(123456),
            'role'=> 'reader'
        ]);
    }
}