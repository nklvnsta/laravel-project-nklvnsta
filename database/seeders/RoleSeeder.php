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
            'name' => 'Olga', 
            'email'=> 'moosbeere_O@mail.ru',
            'password' => Hash::make('123456'),
            'role_id'=> 'moderator'
        ]);
        User::create([
            'name' => 'Olga', 
            'email'=> 'reader@mail.ru',
            'password' => Hash::make('123456'),
            'role_id'=> 'reader'
        ]);
    }
}