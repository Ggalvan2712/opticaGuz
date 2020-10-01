@extends('layouts.app')
@section('content')

{{ session()->get( 'id' ) }}

@if(Auth::check())
	@if(auth()->user()->admin)
		<div class="ml-4">
			<a href="{{ route('productos.edit', $producto)}}" class="btn btn-primary align-right mt-4 mb-4"> Editar </a>
		</div>
	@endif
@endif

@if($producto->diagnostico == "Hipermetropia")
 @include('productos.layoutsproductos.hipermetropia')

@else
	@include('productos.layoutsproductos.productosNoresp')

@endif





@endsection