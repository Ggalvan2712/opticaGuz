<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('productos')->insert([
            'tipo_producto_id' => '1',
            'nombre' => 'Anteojos Dolce & Gabbana 4301 502/7353 ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
            			Código de producto: 310022
						Género: Unsiex Kids
						Color del Armazón: Negro y Naranja
						Color y Tipo del Lente: Naranja espejado
						Material: Acetato
						Estilo: Cuadrado
						Medida del Lente:

    					Ancho del Lente: 44 mm
    					Puente: 20 mm
    					Largo Patilla: 127 mm
						',
		 'precio' => '20.00',
		 'imagen1' => 'public/default-img.png',
		 'imagen2' => 'public/default-img.png',
		 'EstaEliminado' => '0',
		]);

         DB::table('productos')->insert([
            'tipo_producto_id' => '3',
            'nombre' => 'Anteojos Dolce & Gabbana 2223/13128G ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
                        Código de producto: 310022
                        Género: Unsiex Kids
                        Color del Armazón: Negro y Naranja
                        Color y Tipo del Lente: Naranja espejado
                        Material: Acetato
                        Estilo: Cuadrado
                        Medida del Lente:

                        Ancho del Lente: 44 mm
                        Puente: 20 mm
                        Largo Patilla: 127 mm
                        ',
         'precio' => '20.00',
         'imagen1' => 'public/imagenes/productos/30ab6c1a569786ed5883cdbec4ad79e5.jpg',
         'imagen2' => 'public/default-img.png',
         'EstaEliminado' => '0',
        ]);

         DB::table('productos')->insert([
            'tipo_producto_id' => '2',
            'nombre' => 'Anteojos Dolce & Gabbana 4284/304973 ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
                        Código de producto: 310022
                        Género: Unsiex Kids
                        Color del Armazón: Negro y Naranja
                        Color y Tipo del Lente: Naranja espejado
                        Material: Acetato
                        Estilo: Cuadrado
                        Medida del Lente:

                        Ancho del Lente: 44 mm
                        Puente: 20 mm
                        Largo Patilla: 127 mm
                        ',
         'precio' => '20.00',
         'imagen1' => 'public/imagenes/productos/thumb-1920-943148.jpg',
         'imagen2' => 'public/default-img.png',
         'EstaEliminado' => '0',
        ]);

         DB::table('productos')->insert([
            'tipo_producto_id' => '2',
            'nombre' => 'Anteojos Dolce & Gabbana 4304 3091 ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
                        Código de producto: 310022
                        Género: Unsiex Kids
                        Color del Armazón: Negro y Naranja
                        Color y Tipo del Lente: Naranja espejado
                        Material: Acetato
                        Estilo: Cuadrado
                        Medida del Lente:

                        Ancho del Lente: 44 mm
                        Puente: 20 mm
                        Largo Patilla: 127 mm
                        ',
         'precio' => '20.00',
         'imagen1' => 'public/imagenes/productos/thumb-1920-943148.jpg',
         'imagen2' => 'public/default-img.png',
         'EstaEliminado' => '0',
        ]);

         DB::table('productos')->insert([
            'tipo_producto_id' => '1',
            'nombre' => 'Anteojos Dolce & Gabbana 4301 502/7353 ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
                        Código de producto: 310022
                        Género: Unsiex Kids
                        Color del Armazón: Negro y Naranja
                        Color y Tipo del Lente: Naranja espejado
                        Material: Acetato
                        Estilo: Cuadrado
                        Medida del Lente:

                        Ancho del Lente: 44 mm
                        Puente: 20 mm
                        Largo Patilla: 127 mm
                        ',
         'precio' => '20.00',
         'imagen1' => 'public/default-img.png',
         'imagen2' => 'public/default-img.png',
         'EstaEliminado' => '0',
        ]);

         DB::table('productos')->insert([
            'tipo_producto_id' => '3',
            'nombre' => 'Anteojos Dolce & Gabbana 2223/13128G ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
                        Código de producto: 310022
                        Género: Unsiex Kids
                        Color del Armazón: Negro y Naranja
                        Color y Tipo del Lente: Naranja espejado
                        Material: Acetato
                        Estilo: Cuadrado
                        Medida del Lente:

                        Ancho del Lente: 44 mm
                        Puente: 20 mm
                        Largo Patilla: 127 mm
                        ',
         'precio' => '20.00',
         'imagen1' => 'public/imagenes/productos/30ab6c1a569786ed5883cdbec4ad79e5.jpg',
         'imagen2' => 'public/default-img.png',
         'EstaEliminado' => '0',
        ]);

         DB::table('productos')->insert([
            'tipo_producto_id' => '2',
            'nombre' => 'Anteojos Dolce & Gabbana 4284/304973 ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
                        Código de producto: 310022
                        Género: Unsiex Kids
                        Color del Armazón: Negro y Naranja
                        Color y Tipo del Lente: Naranja espejado
                        Material: Acetato
                        Estilo: Cuadrado
                        Medida del Lente:

                        Ancho del Lente: 44 mm
                        Puente: 20 mm
                        Largo Patilla: 127 mm
                        ',
         'precio' => '20.00',
         'imagen1' => 'public/imagenes/productos/thumb-1920-943148.jpg',
         'imagen2' => 'public/default-img.png',
         'EstaEliminado' => '0',
        ]);

         DB::table('productos')->insert([
            'tipo_producto_id' => '2',
            'nombre' => 'Anteojos Dolce & Gabbana 4304 3091 ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
                        Código de producto: 310022
                        Género: Unsiex Kids
                        Color del Armazón: Negro y Naranja
                        Color y Tipo del Lente: Naranja espejado
                        Material: Acetato
                        Estilo: Cuadrado
                        Medida del Lente:

                        Ancho del Lente: 44 mm
                        Puente: 20 mm
                        Largo Patilla: 127 mm
                        ',
         'precio' => '20.00',
         'imagen1' => 'public/imagenes/productos/thumb-1920-943148.jpg',
         'imagen2' => 'public/default-img.png',
         'EstaEliminado' => '0',
        ]);

         DB::table('productos')->insert([
            'tipo_producto_id' => '2',
            'nombre' => 'Anteojos Dolce & Gabbana 4284/304973 ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
                        Código de producto: 310022
                        Género: Unsiex Kids
                        Color del Armazón: Negro y Naranja
                        Color y Tipo del Lente: Naranja espejado
                        Material: Acetato
                        Estilo: Cuadrado
                        Medida del Lente:

                        Ancho del Lente: 44 mm
                        Puente: 20 mm
                        Largo Patilla: 127 mm
                        ',
         'precio' => '20.00',
         'imagen1' => 'public/imagenes/productos/thumb-1920-943148.jpg',
         'imagen2' => 'public/default-img.png',
         'EstaEliminado' => '0',
        ]);

         DB::table('productos')->insert([
            'tipo_producto_id' => '2',
            'nombre' => 'Anteojos Dolce & Gabbana 4304 3091 ',
            'genero' => 'Unisex',
            'marca_id' => '2',
            'estilo_id' => '3',
            'descripcion' => '
                        Código de producto: 310022
                        Género: Unsiex Kids
                        Color del Armazón: Negro y Naranja
                        Color y Tipo del Lente: Naranja espejado
                        Material: Acetato
                        Estilo: Cuadrado
                        Medida del Lente:

                        Ancho del Lente: 44 mm
                        Puente: 20 mm
                        Largo Patilla: 127 mm
                        ',
         'precio' => '20.00',
         'imagen1' => 'public/imagenes/productos/thumb-1920-943148.jpg',
         'imagen2' => 'public/default-img.png',
         'EstaEliminado' => '0',
        ]);
    }
}
