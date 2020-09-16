<?php

use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('estilos')->insert([
     		'name' => 'Cuadrado'
		]);//

     DB::table('estilos')->insert([
     		'name' => 'Blue Protect'
		]);

     DB::table('estilos')->insert([
     		'name' => 'Cat Eye'
		]); //
    }
}
