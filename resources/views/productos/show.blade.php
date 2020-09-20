@extends('layouts.app')
@section('content')

{{ session()->get( 'id' ) }}

@if(Auth::check())
	@if(auth()->user()->admin)
		<a href="{{ route('productos.edit', $producto)}}" class="btn btn-primary align-right mt-4 mb-4"> Editar </a>
	@endif
@endif

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 d-flex inline">
			<div class="col-md-5">
				<img src="{{Storage::url($producto->imagen1)}}" class="w-100">
				<div class="col-md-12 d-flex inline">
					<div class="col-md-4">
						<img src="{{Storage::url($producto->imagen1)}}" class="w-100">
					</div>
					<div class="col-md-4">
						<img src="{{Storage::url($producto->imagen2)}}" class="w-100">
					</div>
		</div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-6">
				<h2>{{$producto->nombre}}</h2>
				<h3>${{$producto->precio}}</h3>
				<br>
					<div class="col-md-12 d-flex inline no-padding">
						<div class="col-md-3 align-left">
							<select class="form-control">
								<option value="1" selected>1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
								<option value="10" >10</option>
							</select>
						</div>

						<div class="col-md-9">
							<button class="btn btn-primary col-md-9">Agregar al carrito</a>
						</div>
					</div>

					<div class="col-md-12 mt-4">
						{!! parsedown($producto->descripcion) !!}
					</div>
			</div>
		</div>

	</div>
</div>





@endsection