<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estilos;
use DB;

class EstilosController extends Controller
{
    public function index()
    {
       $estilo = Estilos::first()->get();

       //dd($estilo);
       return view('admin/estilos' , compact('estilo'));
    }

    public function store(){
       Estilos::create([
        'name' => request('name'),
       ]);

       return redirect('admin/estilos');
     }

    public function create()
    {

        return view ('admin/estiloCreate');
    }

  public function edit(Estilos $estilo){

      return view('admin/estiloEdit' , [
            'estilo' => $estilo
        ]);
  }

  public function update(Request $request , Estilos $estilo){
    $estilo->update([
        $estilo->name = $request->name,
    ]);

    return redirect('admin/estilos');
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