@extends('layouts.adminlayout')

 @section('admincontent')

 <form method="POST" action={{route('producto.store')}}>
	@csrf
	<h1> Agregar Producto</h1>

	<label>Tipo de Procuto</label>
	<select name="tipoProducto">
	  <option value="Lente de Contacto">Lente de Contacto</option>
	  <option value="Armazon">Armazon</option>
	  <option value="Liquido">Liquido</option>
	</select>


	<label>
	Nombre
	<input type="text" name="nombre"><br>
	</label>

	<label>
	Genero
	<input type="text" name="genero"><br>
	</label>

	<label>
	Uso
	<input type="text" name="uso"><br>
	</label>

	<label>
	Descripcion
	<input type="textarea" name="descripcion"><br>
	</label>
	<button>Agregar</button>
</form>

 @endsection