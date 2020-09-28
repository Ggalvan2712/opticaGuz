<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeroBanner;

class HeroController extends Controller
{
   public function index(){
   	return view('admin/herobanner');
   }

   public function store(Request $request){

   		$hero = new HeroBanner();

   		  if($request->hasFile('herobanner')){
            $hero->imagen = $request->file('herobanner')->store('public/imagenes/');

            $hero->save();
			}
			else{
				return;
			}

			return redirect()->route('index');
       }


}
