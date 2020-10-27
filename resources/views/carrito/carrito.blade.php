@extends('layouts.app')

 @section('content')

<?php $valor = 0 ?>
@if(session('cart'))
@foreach(session('cart') as $id => $detalles)
<?php $valor += $detalles["precio"] * $detalles["cantidad"] ?>
@endforeach
@endif
<div class="col-md-12 row mt-3">
    <div class="col-md-6 text-center">
        <div class="col-md-12">
             <h3 href="#" style="font-weight: bold; color:rgb(80, 82, 80);">Tu Carrito</h3>
        </div>
    </div>

    <div class="col-md-6 row justify-content-between">
      	<div class="col-md-6 text-center">
      		<h5 style="font-weight: bold;" class="text-center mt-auto mb-auto" href="#">Total:</h5>
      		<a class="subtotal" style="font-weight: bold;">${{$valor}}</a>
      	</div>
      	@if(session('cart'))
      	<div class="col-md-6">
      		<a class="btn btn-primary" style="color:white;" href="{{route('pagos')}}">Proceder al pago</a>
		</div>
		@endif
    </div>
 </div>

@if(!session('cart'))

 		<div class="col-md-12">
 			<div class="cartDiv my-2">
 				<div class="centerCarrito">
 					<div class="cold-md-12 d-md-block alignt-center">
 						<div class="col-md-12">
 							<a class="text-center" style="font-weight: bold; color:rgb(80, 82, 80);"> Tu carrito esta vacio </a>
 						</div>
 						<div class="col-md-12">
 							<a class="btn btn-primary" href="{{route('productos.index')}}" style="color:white;">Seguir Comprando</a>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
@else


	<div class="">
		@foreach(session('cart') as $id => $detalles)

		<?php $subtotal = 0;
				$subtotal = $detalles["precio"] * $detalles["cantidad"];?>

@if(isset($detalles))
<form method="post" action="{{route('actualizarCarrito' , $detalles["id"])}}">
	@csrf
		<div class="container">
			<div class="col-md-12 cartProducto mb-2 mt-2 row ">
				<div class="col-md-3 text-center">
					<img src="{{Storage::url($detalles["foto"])}}" max-widht="100px" height="100px"/>
				</div>
				<div class="col-md-3 text-center">
					<div class="col-md-12 d-md-block">
						<div class="col-md-12">
							<h5 class="text-center mt-2 mb-2" style="color:#484848; font-weight: bold;"><a href="{{route('producto.show' , $detalles["id"])}}">{{$detalles["nombre"]}}</a></h5>
						</div>
						<div class="col-md-12">
							<a style="color:rgb(104, 104, 104); font-weight:bold;">Precio: ${{$detalles["precio"]}} </a>
						</div>
					</div>
				</div>
				<div class="col-md-2 d-md-block mx-auto my-auto">
					<div class="col-md-12">
						<a class="text-center">Cantidad</a>
					</div>
					<div class="col-md-9">
						<input type="number" class="form-control cantidad" placeholder="Cantidad" name="cantidad"
					 value="{{$detalles["cantidad"]}}">
                    </div>

				</div>
				<div class="col-md-4 mx-auto my-auto row">
					<div class="col-md-4 d-md-block">
						<div class="col-md-12 text-center">
							<a style="color:rgb(104, 104, 104); font-weight:bold;">Subtotal: </a>
						</div>
						<div class="col-md-12 text-center">
							<a class="precio" style="color:rgb(104, 104, 104); font-weight:bold;">${{$subtotal}} </a>
						</div>
					</div>
					<div class="col-md-4">
						<a class="btn btn-danger col-sm-12"
						href="{{route('eliminarCarrito' , $detalles["id"])}}" style="color:white;">Eliminar</a>
					</div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-primary col-sm-12"
							 style="color:white;">Actualizar</button>

					</div>

				</div>


	@endif
			</div>
		</div>
		</form>
		@endforeach



	</div>
 @endif

 </div>


@endsection

@section('script')



@endsection