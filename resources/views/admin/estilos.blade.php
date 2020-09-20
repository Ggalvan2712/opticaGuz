@extends('layouts.app')

 @section('content')

<a class="btn btn-primary mt-3 mb-3" href="{{route('estilos.crear')}}">Agregar Estilos</a>

<div class="row justify-content-center">
		<div class="col-auto">
			<table class="table table-responsive">
  			<thead>
    			<tr>
      			<th scope="col">Id</th>
      			<th scope="col">Estilos</th>
      			<th scope="col">Editar</th>
     			</tr>
  			</thead>
  			<tbody>

  				@forelse($estilo as $estilosItem)
  				<tr>
 					<th>{{$estilosItem->id}}</th>
 					<td>{{$estilosItem->name}}</td>
 					<td><a class="btn btn-primary" style="color:white;" href="{{route('estilos.edit' , $estilosItem)}}">Editar</a>
 				</tr>
 				@empty
					<li>No hay estilos agregadas</li>
				@endforelse
  			</tbody>
		</table>
	</div>
</div>

@endsection