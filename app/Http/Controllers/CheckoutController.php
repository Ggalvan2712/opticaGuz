<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CheckoutController extends Controller
{
    public function index()
    {
        session()->flush();
        //dd(session()->get('cart'));
        return view('pagos/envios');
    }

    public function createCheckoutSession(Request $request){

        $checkout = session()->get('checkout');

        $num  = '';
        $piso = '';

          if(isset($request->numero)){
                        $num = $request->numero;
                    }
          else{
                        $num = 'N/C';
                    }

        if(isset($request->piso)){
                        $piso = $request->piso;
                    }
          else{
                        $piso = 'N/C';
                    }

         if(!$checkout) {
            $checkout = [

                    "contacto" => $request->email,
                    "nombre" => $request->nombre,
                    "apellido" => $request->apellido,
                    "dni" => $request->dni,
                    "calle" => $request->calle,
                    "numero" => $num,
                    "piso" => $piso,
                    "referencias" => $request->referencias,
                    "ciudad" => $request->ciudad,
                    "provincia" => 'Tucuman',
                    "cp" => $request->cp,
                    "telefono" => $request->telefono,


            ];





            session()->put('checkout' , $checkout);


             return redirect()->route('pagos');
        }


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