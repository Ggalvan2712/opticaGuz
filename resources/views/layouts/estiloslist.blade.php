<div class="form-group row">
	<label for="estilos" class="col-md-4 col-form-label text-md-right">{{ __('Estilos') }}</label>

		<div class="col-md-6">
    		<select id="id" name="estilo_id" class="form-control" required>
       				<option></option>
       			@foreach( $estilos as $key => $value )
   					<option value="{{ $key }}">{{ $value }}</option>
				@endforeach
			</select>
		</div>
</div>