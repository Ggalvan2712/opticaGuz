@extends('layouts.app')

 @section('content')

@forelse($marca as $marcasItem)
 <li>{{$marcasItem->name}}</li>
@empty
<li>No hay marcas agregadas</li>
@endforelse

@if(Auth::check())
  @if(auth()->user()->admin)
	<a class="btn btn-primary" href="{{route('marca.crear')}}">Agregar Marca</a>
  @endif
@endif

@endsection