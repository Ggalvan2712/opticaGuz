<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use DB;

class MarcaController extends Controller
{
    public function index()
    {
       $marca = Marca::latest()->get();

       return view('marcas/marcas' , compact('marca'));
    }

    public function store(){
       Marca::create([
        'name' => request('name'),
        'logo' -> request('logo'),
       ]);

       return  redirect('marcas');
     }

    public function create()
    {

        return view ('admin/marcaCreate');
    }



    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public function obtenerRegistros(){
      $marcas = Marca::pluck('name' , 'id');
      $marcas->all();
       return view('admin/producto/crear' , compact('marcas'));;
    }
    protected static function getFacadeAccessor()
    {
        throw new \Exception('Method getFacadeAccessor() is not implemented.');
    }
}