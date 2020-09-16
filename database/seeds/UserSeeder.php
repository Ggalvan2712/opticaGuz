<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Gustavo',
            'email' => 'GustavoAdrG@gmail.com',
            'password' => Hash::make('EnD4518801'),
            'adress' => 'Crisostomo Alvarez 1666',
            'province' => 'Tucuman',
            'city' => 'San Miguel de Tucuman',
            'admin' => '1',
            'phone' => '3813325224',

        ]);//
    }
}
