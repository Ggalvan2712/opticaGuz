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

       return view('marcas/marca' , compact('marca'));
    }

    public function store(){
       Marca::create([
        'name' => request('name'),
       ]);

       return  redirect('admin/marca');
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