@extends('layouts.app')

 @section('content')

@forelse($estilo as $estilosItem)
 <li>{{$estilosItem->name}}</li>
@empty
<li>No hay estilos agregadas</li>
@endforelse

<a class="btn btn-primary" href="{{route('estilos.crear')}}">Agregar Estilos</a>

@endsection