<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promociones;
use DB;

class PromoController extends Controller
{
   public function index()
    {
    	$promo = DB::table('promociones')->first();

       return view('admin/banners' , compact('promo'));
    }

    public function update(Request $request , Promociones $promo){

        $promocionUpdate = Promociones::where('id' , 2)->first();



    	if($request->hasFile('promocion1')){
            $promocion1 = $request->file('promocion1')->store('public/imagenes/');
        }
        else{
            $promocion1 = $promocionUpdate->promocion1;
        }



        if($request->hasFile('promocion2')){
            $promocion2 = $request->file('promocion2')->store('public/imagenes/');
        }
        else{
            $promocion2 = $promocionUpdate->promocion2;
        }

        $promocionUpdate->update([
        	$promocionUpdate->promocion1 = $promocion1,
        	$promocionUpdate->promocion2 = $promocion2
        ]);

        return redirect ('/');
    }
}
