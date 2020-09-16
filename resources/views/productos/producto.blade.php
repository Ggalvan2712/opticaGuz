@extends('layouts.app')

 @section('content')

@if(Auth::check())
	@if(auth()->user()->admin)
    <div class="pl-3 align-right">
		<a href="{{ route('productos.crear')}}" class="btn btn-primary"> Agregar Productos </a>
    </div>
    <br>
	@endif
@endif
<div class="col-md-12">
    <div class="row">

        <!-- ASIDE -->
        @include('productos.layoutsproductos.layoutfiltros')
        <br>
        <!-- FIN ASIDE -->

        <!-- COMIENZO PRODUCTOS -->

        @include('productos.layoutsproductos.layoutproductomain')

        @include('productos.layoutsproductos.layoutprodresponsive');


</div>
<br><br>
<div class="col-sm-12">
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    {{$productos->render()}}
  </ul>
</nav>
</div>



@endsection

