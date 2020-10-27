<?php

use Illuminate\Database\Seeder;

class Hero extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hero_banners')->insert([
     	 'imagen' => 'public/firstpromo.PNG',
     	 'activo' => 1
		]);// //
    }
}
