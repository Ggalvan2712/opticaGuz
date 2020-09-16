<div class="form-group row">
	<label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

		<div class="col-md-6">
            <select id="id" name="marca_id" class="form-control" required>
      				<option></option>
       			@foreach( $marcas as $key => $value )
   					<option value="{{ $key }}">{{ $value }}</option>
				@endforeach
		   </select>
        </div>
</div>