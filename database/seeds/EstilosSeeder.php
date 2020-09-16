<?php

use Illuminate\Database\Seeder;

class EstilosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('marcas')->insert([
     		'name' => 'Ray Ban'
		]);//

     DB::table('marcas')->insert([
     		'name' => 'Acuvue'
		]);

     DB::table('marcas')->insert([
     		'name' => 'Opti Free'
		]);
    }
}
