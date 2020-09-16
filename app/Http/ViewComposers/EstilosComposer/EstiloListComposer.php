<?php

namespace App\Http\ViewComposers;


use Illuminate\View\View;
use App\Estilos;

class EstiloListComposer{
	public function compose (View $view){
	  $estilos = Estilos::pluck('name' , 'id');
      $estilos->all();

      $view->with(['estilos' => $estilos]);



	}
}