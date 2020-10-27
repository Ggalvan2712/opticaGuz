	<div class="col-md-12 row">
		<div class="col-md-6">
			<h4>Contacto</h4>
		</div>
		<div class="col-md-6">
			@if(!auth()->user())
			<a> Estas registrado?</a>
			<a href="{{ route('login')}}" style="color:green;"> Iniciar sesión </a>
			@endif
		</div>
	</div>
	<div class="col-md-12">
		<input type="email" class="form-control" placeholder="Correo electronico" name="email" required>
	</div>