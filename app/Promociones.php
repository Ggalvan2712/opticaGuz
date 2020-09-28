<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
   protected $fillable = ['promocion1' , 'promocion2'];

	public function getRouteNameKey()
	{

		return 'url';
	} //
}
