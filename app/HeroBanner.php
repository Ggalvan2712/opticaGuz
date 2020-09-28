<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeroBanner extends Model
{
   protected $fillable = ['imagen'];

    public function getRouteNameKey()
    {

        return 'url';
    } //
}
