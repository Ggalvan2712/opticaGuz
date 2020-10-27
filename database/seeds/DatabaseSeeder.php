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
      $this->call(UserSeeder::class);
      $this->call(EstilosSeeder::class);
      $this->call(TipoProductoSeeder::class);
      $this->call(MarcasSeeder::class);
      $this->call(ProductosSeeder::class);
      $this->call(PromoSeeder::class);  // $this->call(UserSeeder::class);
      $this->call(Hero::class);
    }
}
