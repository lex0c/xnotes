<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Léo',
            'lastname' => 'Castro',
            'email'    => 'leonardo_carvalho@outlook.com',
            'password' => bcrypt('xn123')
        ]);

        User::create([
            'name'     => 'Anonymous',
            'lastname' => 'Xnount',
            'email'    => 'anonymous@obscure.com',
            'password' => bcrypt('anon321')
        ]);
    }
}