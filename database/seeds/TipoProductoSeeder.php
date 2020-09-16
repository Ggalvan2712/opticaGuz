<?php

use Illuminate\Database\Seeder;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tipo_productos')->insert([
     		'name' => 'Lentes de Sol'
		]);//

     DB::table('tipo_productos')->insert([
     		'name' => 'Armazones de Receta'
		]);

     DB::table('tipo_productos')->insert([
     		'name' => 'Lentes de Contacto'
		]);

      DB::table('tipo_productos')->insert([
     		'name' => 'Liquidos'
		]);
    }
}
