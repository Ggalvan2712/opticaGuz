<?php

namespace App\Http\ViewComposers;


use Illuminate\View\View;
use App\TipoProductos;

class TipoProductosListComposer{
	public function compose (View $view){
	  $tipoProducto = TipoProductos::pluck('name' , 'id');
      $tipoProducto->all();

      $view->with(['tipoProducto' => $tipoProducto]);



	}
}