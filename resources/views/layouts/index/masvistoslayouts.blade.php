<div class="col-md-12 mt-4">
	<div class="col-md-5 rounderCorner py-4 separadorIndex">
		<a class="float-right" href="{{route('productos.index')}}">Los Mas Vistos</a>
	</div>

	<div class="container mt-4">
			<div class="owl-carousel owl-theme">
				@forelse($productos as $producto)
    			<div class="item">
    				<a href="{{route('producto.show' , $producto->id)}}">
                    <img src="{{Storage::url($producto->imagen1)}}">
                    <h4>{{$producto->nombre}}</h4>
                    </a>
    			</div>
    			@empty
    			No hay productos para mostrar.
    			@endforelse
   			</div>
	</div>

</div>