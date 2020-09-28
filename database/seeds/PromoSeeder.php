<?php

use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('promociones')->insert([
     	 'promocion1' => 'public/firstpromo.PNG',
		 'promocion2' => 'public/firstpromo.PNG',
		]);//
    }
}
