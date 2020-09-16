<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProductos extends Model
{

protected $fillable = ['name'];

    public function getRouteNameKey()
    {

        return 'url';
    }
}
