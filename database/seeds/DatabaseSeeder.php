<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Prestador 01',
            'email' => 'prestador01'.'@gmail.com',
            'password' => bcrypt('prestador123'),
            'is_prestador' => 1
        ]);
    }
}
