@extends('layouts.app')
@section('content')

{{ session()->get( 'id' ) }}

@if(Auth::check())
	@if(auth()->user()->admin)
		<a href="{{ route('productos.edit', $producto)}}" class="btn btn-primary align-right"> Editar </a>
	@endif
@endif


<h1>{{$producto->nombre}}</h1>
<h2>{{$producto->descripcion}}</h2>
<img src="{{Storage::url($producto->imagen2)}}">
<img src="{{Storage::url($producto->imagen1)}}">

@endsection