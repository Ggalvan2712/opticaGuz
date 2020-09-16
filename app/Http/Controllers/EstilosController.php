<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estilos;
use DB;

class EstilosController extends Controller
{
    public function index()
    {
       $estilo = Estilos::latest()->get();

       //dd($estilo);
       return view('admin/estilo' , compact('estilo'));
    }

    public function store(){
       Estilos::create([
        'name' => request('name'),
       ]);

       return redirect('admin/estilo');
     }

    public function create()
    {

        return view ('admin/estiloCreate');
    }



    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        throw new \Exception('Method getFacadeAccessor() is not implemented.');
    }
}