<div class="form-group row">
	<label for="estilos" class="col-md-4 col-form-label text-md-right">{{ __('Estilos') }}</label>

		<div class="col-md-6">
    		<select id="id" name="estilo_id" class="form-control" required>
       				<option></option>
       			@foreach( $estilos as $key => $value )
   					@if(isset($producto))
       			 		@if($producto->estilo_id == $key)
       						<option value="{{ $key }}" selected>{{ $value }}</option>
       					@else
   							<option value="{{ $key }}">{{ $value }}</option>
       					@endif
                     @else
                <option value="{{ $key }}">{{ $value }}</option>
       				@endif
				@endforeach
			</select>
		</div>
</div>