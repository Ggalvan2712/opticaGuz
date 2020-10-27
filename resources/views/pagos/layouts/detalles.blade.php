<?php $valor = 0 ?>
@if(session('cart'))
@foreach(session('cart') as $id => $detalles)
<?php $valor += $detalles["precio"] * $detalles["cantidad"] ?>
@endforeach
@endif

<div class="col-md-12 text-center" style="border-bottom: 1px solid rgb(226 , 226 , 229)">
	@foreach(session('cart') as $id => $detalles)
		<?php $subtotal = 0;
				$subtotal = $detalles["precio"] * $detalles["cantidad"];
		?>

		<div class="col-md-12 mt-4 row mb-2">
			<div class="col-md-3">
				<img src="{{Storage::url($detalles["foto"])}}" height="50"/>
			</div>
			<div class="col-md-6">
				<a style="font-weight: bold; color:rgb(80, 82, 80);"> {{$detalles["nombre"]}} </a>

			</div>
			<div class="col-md-3">
				<a style="font-weight: bold; color:rgb(80, 82, 80);"> Cantidad: {{$detalles["cantidad"]}} </a>
				<a style="font-weight: bold; color:rgb(80, 82, 80);"> Subtotal: ${{$subtotal}} </a>
			</div>
		</div>
		@endforeach
	</div>


<div class="col-md-12 row mt-2">
		<div class="col-md-6 text-center">
			<a style="font-weight: bold; color:rgb(80, 82, 80);">Subtotal</a>
		</div>
		<div class="col-md-6 text-center">
			<a style="font-weight: bold; color:rgb(80, 82, 80);">${{$valor}}</a>
		</div>
</div>

<div class="col-md-12 row mt-2" style="border-bottom: 1px solid rgb(226 , 226 , 229)">
		<div class="col-md-6 text-center">
			<a style="font-weight: bold; color:rgb(80, 82, 80);">Envio</a>
		</div>
		<div class="col-md-6 text-center">
			<a style="font-weight: bold; color:rgb(80, 82, 80);">$100</a>
		</div>

</div>

<div class="col-md-12 row mt-2">
		<div class="col-md-6 text-center">
			<a style="font-weight: bold; color:rgb(80, 82, 80);">TOTAL</a>
		</div>
		<div class="col-md-6 text-center">
			<h3 style="font-weight: bold; color:rgb(80, 82, 80);">${{$valor + 100}}</h3>
		</div>
</div>

@if(session('checkout'))
	<div class="col-md-12 mt-2">
		<div class="col-md-12 text-center">
			<a class="btn btn-primary mb-2 col-md-6 col-sm-12"
			data-toggle="modal" data-target="#enviosModal"
			style="color:white;"> Continuar al Pago </a>
		</div>
	</div>
@else
		<div class="col-md-12 text-center">
			<button type="submit" class="btn btn-primary mb-2 col-md-6 col-sm-12" form="checkout"
			style="color:white;"> Siguiente Paso </button>
		</div>

@endif