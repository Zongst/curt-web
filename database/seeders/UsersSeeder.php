<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admins (me, chica, flev and nico)
        User::create([
            'name' => 'Monty',
            'email' => 'hollings@protonmail.com',
            'password' => bcrypt('vivalayaoi'),
        ]);
        User::create([
            'name' => 'Nico',
            'email' => 'BdryNicolas@outlook.fr',
            'password' => bcrypt('vivalayaoi'),
        ]);
        User::create([
            'name' => 'Chica',
            'email' => 'chachicaco@gmail.com',
            'password' => bcrypt('vivalayaoi'),
        ]);
        // User::create([
        //     'name' => 'Monty',
        //     'email' => 'hollings@protonmail.com',
        //     'password' => bcrypt('vivalayaoi'),
        // ]);

    }
}
