@extends('layouts.app')

 @section('content')

 <a class="btn btn-primary" href="{{route('tipoproducto.crear')}}">Agregar Tipo de Producto</a>

@forelse($tipoProducto as $tipoProductoItem)
 <li>{{$tipoProductoItem->name}}</li>
@empty
<li>No hay tipo de productos agregados</li>
@endforelse



@endsection