<div class="form-group row">
	<label for="estilos" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Producto') }}</label>

		<div class="col-md-6">
			<select id="id" name="tipo_producto_id" class="form-control" required>
      				<option></option>
       			@foreach( $tipoProducto as $key => $value )
   					<option value="{{ $key }}">{{ $value }}</option>
				@endforeach
		   </select>
		</div>
</div>