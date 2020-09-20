@extends('layouts.app')
@section('content')

{{ session()->get( 'id' ) }}

@if(Auth::check())
	@if(auth()->user()->admin)
		<a href="{{ route('productos.edit', $producto)}}" class="btn btn-primary align-right mt-4 mb-4"> Editar </a>
	@endif
@endif

@include('productos.layoutsproductos.productosNoresp')





@endsection