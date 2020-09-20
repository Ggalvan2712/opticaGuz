<div class="form-group row">
	<label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

		<div class="col-md-6">
            <select id="id" name="marca_id" class="form-control" required>
      				<option></option>
       			@foreach( $marcas as $key => $value )
       				@if(isset($producto))
       			 		   @if($producto->marca_id == $key)
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