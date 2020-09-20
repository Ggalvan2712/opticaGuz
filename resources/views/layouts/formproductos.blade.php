
	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Agregar Producto') }}</div>

                <div class="card-body">

					<form action="{{route('productos.store')}}" method="POST"  enctype="multipart/form-data">
							@csrf

						@include('layouts.tipoproductolist')

						<div class="form-group row">

							<label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

						<div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>

						<div class="form-group row">

							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

							<div class="col-md-6">
                                <input id="precio" type="decimal" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required autocomplete="precio" autofocus>

                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>


						<div class="form-group row">

							<label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

							<div class="col-md-6">
                                <input id="genero" type="text" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{ old('genero') }}" autocomplete="genero" autofocus>

                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>

							@include('layouts.marcaslist')


							@include('layouts.estiloslist')


						<div class="form-group row">

							<label for="uso" class="col-md-4 col-form-label text-md-right">{{ __('Uso') }}</label>

							<div class="col-md-6">
                                <input id="uso" type="text" class="form-control @error('uso') is-invalid @enderror" name="uso" value="{{ old('uso') }}" autocomplete="uso" autofocus>

                                @error('uso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>

						<div class="form-group row">

							<label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

							<div class="col-md-6">
                                <input id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{ old('tipo') }}" autocomplete="tipo" autofocus>

                                @error('tipo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>

						<div class="form-group row">

							<label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('Diagnostico') }}</label>

							<div class="col-md-6">
                                <input id="diagnostico" type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico" value="{{ old('diagnostico') }}"  autocomplete="diagnostico" autofocus>

                                @error('diagnostico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>

						<div class="form-group row">

							<label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

							<div class="col-md-6">
                                <textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" required autocomplete="descripcion" autofocus>

                                </textarea>

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>


						<div class="form-group row">

							<label for="imagen1" class="col-md-4 col-form-label text-md-right">{{ __('Imagen Primaria') }}</label>

							<div class="col-md-6">
                                <input id="imagen1" type="file" class="form-control-file" name="imagen1" required>

                             </div>
						</div>

						<div class="form-group row">

							<label for="imagen2" class="col-md-4 col-form-label text-md-right">{{ __('Imagen Secundaria') }}</label>

							<div class="col-md-6">
                                <input id="imagen2" type="file" class="form-control-file" name="imagen2">
                            </div>

						</div>
						<br>
						 <div class="form-group row mb-0">
                            <div class="col-xs-12 col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar') }}
                                </button>
                            </div>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>



