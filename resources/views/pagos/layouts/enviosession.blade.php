@if($detalles = session()->get('checkout'))
@endif

	<div class="col-md-12 row">
		<div class="col-md-12">
			<h4>Datos de Contacto</h4>
			<input type="text" class="form-control"
			value="Mail: {{$detalles["contacto"]}} - Telefono: {{$detalles["telefono"]}}" disabled>
		</div>
	</div>

	<div class="col-md-12 row mt-3">
		<div class="col-md-12">
			<h4>Datos de Envio</h4>
			<input type="text" class="form-control"
			value="Calle: {{$detalles["calle"]}} - Numero: {{$detalles["numero"]}} - Piso: {{$detalles["numero"]}} - Ciudad: {{$detalles["ciudad"]}}" disabled>
		</div>
	</div>

	<div class="col-md-12">

	</div>
