<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['tipo_producto_id' , 'nombre','genero','marca_id' , 'estilo_id' , 'uso','tipo','diagnostico','descripcion' ,'precio' , 'imagen1' ,
		'imagen2'];

	public function getRouteNameKey()
	{

		return 'url';
	} //
}
