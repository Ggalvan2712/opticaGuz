@extends('layouts.app')

 @section('content')

   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Agregar Tipo de Producto') }}</div>

                	<div class="card-body">

						<form method="POST" action={{route('tipoproducto.store')}}>
							@csrf
								<div class="form-group row">

									<label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Producto') }}</label>

										<div class="col-md-4">
                               		 		<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               		 		@error('name')
                                    			<span class="invalid-feedback" role="alert">
                                       		 <strong>{{ $message }}</strong>
                                    			</span>
                                			@enderror
                            		</div>
								</div>
								<div class="form-group row mb-0">
                            		<div class="col-md-6 offset-md-4">
                                		<button type="submit" class="btn btn-primary col-xs-12 col-sm-12 col-md-8">
                                    		{{ __('Agregar') }}
                                		</button>
                            		 </div>
                            	</div>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection