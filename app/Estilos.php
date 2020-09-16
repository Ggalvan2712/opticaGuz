<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estilos extends Model
{
    protected $fillable = ['name'];

	public function getRouteNameKey()
	{

		return 'url';
	} //
}
