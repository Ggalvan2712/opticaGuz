<?php

namespace App\Http\ViewComposers;


use Illuminate\View\View;
use App\Marca;

class MarcasListComposer{
	public function compose (View $view){
	  $marcas = Marca::pluck('name' , 'id');
      $marcas->all();

      $view->with(['marcas' => $marcas]);



	}
}