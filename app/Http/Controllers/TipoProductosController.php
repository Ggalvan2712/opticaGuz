<?php

namespace App\Http\Controllers;

use App\TipoProductos;
use Illuminate\Http\Request;
use DB;

class TipoProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipoProducto = TipoProductos::latest()->get();

      return view('admin/tipoproducto' , compact('tipoProducto'));  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tipoproductoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       TipoProductos::create([
            'name' => request('name'),
            ]);

        return redirect('admin/tipoproducto');// //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function show(TipoProductos $tipoProductos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoProductos $tipoProductos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoProductos $tipoProductos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoProductos $tipoProductos)
    {
        //
    }
}
