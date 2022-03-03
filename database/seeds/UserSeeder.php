<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Mario',
            'surname' =>  'Rossi',
            'email' => 'mario.rossi@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ]);
        DB::table('users')->insert([
            'name'=> 'Lucia',
            'surname' =>  'Verdi',
            'email' => 'lucia.verdi@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ]);
        DB::table('users')->insert([
            'name'=> 'Chiara',
            'surname' =>  'Bianchi',
            'email' => 'chiara.bianchi@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ]);
        DB::table('users')->insert([
            'name'=> 'Luca',
            'surname' =>  'Viola',
            'email' => 'luca.viola@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ]);
    }
}
