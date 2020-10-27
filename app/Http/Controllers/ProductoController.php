<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Producto;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Inner Join con las claves foraneas
        // 1er parametro = nombre de la tabla a unir
        // 2do parametro = nombre del id de la tabla a unir
        // 3er parametro = nombre de la clave foranea de la tabla principal

        $productos = DB::table('productos')
                    ->join('tipo_productos' , 'tipo_productos.id', '=' , 'productos.tipo_producto_id')
                    ->join('marcas' , 'marcas.id', '=' ,'productos.marca_id' )
                    ->join('estilos' , 'estilos.id', '=' ,'productos.estilo_id')
                    ->select('productos.*', 'tipo_productos.name as tipoProd' , 'marcas.name as marca' ,
                        'estilos.name as estilo')
                   ->paginate(12);

       //dd($producto);
       return view('productos/producto' , compact('productos'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('admin/productoCrear');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     // CREA UN OBJETO A PARTIR DEL MODELO
        $producto = new Producto;

        $producto->tipo_producto_id = $request->tipo_producto_id;
        $producto->nombre = $request->nombre;
        $producto->genero = $request->genero;
        $producto->marca_id = $request->marca_id;
        $producto->estilo_id = $request->estilo_id;
        $producto->uso = $request->uso;
        $producto->tipo = $request->tipo;
        $producto->diagnostico = $request->diagnostico;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        if($request->hasFile('imagen1')){
            $producto->imagen1 = $request->file('imagen1')->store('public/imagenes/productos');
        }
        else{
            $producto->imagen1 = "public/default-img.png";
        }

        if($request->hasFile('imagen2')){
            $producto->imagen2 = $request->file('imagen2')->store('public/imagenes/productos');
        }
        else{
            $producto->imagen2 = "public/default-img.png";
        }


        $producto->save();

        return redirect()->route('producto.show' , $producto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        return view('productos/show' , ['producto' => Producto::findOrFail($id)]);
    }



// Obtener registro de Marcas

     public function obtenerRegistros(){
      $marcas = Marca::pluck('name' , 'id');
      $marcas->all();
      //dd($marcas);
      return view('admin/productoCrear' , compact('marcas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('admin/productoEdit' , [
            'producto' => $producto
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Producto $producto)
    {

        if($request->hasFile('imagen2')){
            $imagen2 = $request->file('imagen2')->store('public/imagenes/productos');
        }
        else{
            $imagen2 = $producto->imagen2;
        }

        if($request->hasFile('imagen1')){
            $imagen1 = $request->file('imagen1')->store('public/imagenes/productos');
        }
        else{
            $imagen1 = $producto->imagen1;
        }


        $producto->update([
        $producto->tipo_producto_id = $request->tipo_producto_id,
        $producto->nombre = $request->nombre,
        $producto->genero = $request->genero,
        $producto->marca_id = $request->marca_id,
        $producto->estilo_id = $request->estilo_id,
        $producto->uso = $request->uso,
        $producto->tipo = $request->tipo,
        $producto->diagnostico = $request->diagnostico,
        $producto->descripcion = $request->descripcion,
        $producto->precio = $request->precio,
        $producto->imagen1 = $imagen1,
        $producto->imagen2 = $imagen2,
        ]);


        return redirect()->route('producto.show' , $producto->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }

    public function cart(){

       // dd(session()->get('cart'));

        return view('carrito/carrito');
    }

    public function addToCart($id , Request $request){

        $product = Producto::find($id);
        $cart = session()->get('cart');
        $esfericoIzq = 1;
        $esfericoDer = 1;
        $cantidad = 1;

        //dd($request->esfericoIzq);


            $cantidad = $request->cantidad;


        if(isset($request->esfericoIzq)){
           if($esfericoDer == $esfericoIzq){

                    $esfericoDer = $esfericoIzq;
                    $cantidad = $cantidad;
                }
                else{

                   $esfericoDer = $request->esfericoIzq;
                   $cantidad = 2;
                }

        }

        dd($cantidad);
            // si el carrito esta vacio entonces es el primer producto //

        if(!$cart) {
            $cart = [
                $id => [
                    "id" => $product->id,
                    "nombre" => $product->nombre,
                    "cantidad" => $cantidad,
                    "precio" => $product->precio,
                    "foto" => $product->imagen1,
                    "esfericoIzq" => $esfericoIzq,
                    "esfericoDer" => $esfericoDer
                ]
            ];

            session()->put('cart' , $cart);


             return view('carrito/carrito');
        }

        // SI EL CARRITO ESTA VACIO VERIFICAR SI EXISTE EL PRODUCTO Y AUMENTAR LA CANTIDAD //

        if(isset($cart[$id])){
            $cart[$id]['cantidad']++;

            session()->put('cart' , $cart);



             return view('carrito/carrito');
        }

        // SI EL ITEM NO EXISTE ENTONCES AGREGARLO AL CARRITO CON CANTIDAD = 1 //

        $cart[$id] = [
            "id" => $product->id,
            "nombre" => $product->nombre,
            "cantidad" => 1,
            "precio" => $product->precio,
            "foto" => $product->imagen1
        ];

        session()->put('cart' , $cart);


         return view('carrito/carrito');

}

public function deleteItemCart($indice){


    $cart = session()->get('cart');

    foreach($cart as $index => $product){
        if($product["id"] == $indice){
            unset($cart[$index]);
        }
    }
    session(['cart' => $cart]);

    return view('carrito/carrito');
}

public function updateCart($id , Request $request){

    $cart = session()->get('cart');

     if(isset($cart[$id])){

        $cart[$id]['cantidad'] = $request->cantidad;

            session()->put('cart' , $cart);


             return view('carrito/carrito');
        }
}
}
