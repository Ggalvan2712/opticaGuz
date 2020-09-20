@extends ('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Agregar Producto') }}</div>

                <div class="card-body">

				<form action="{{route('productos.update' , $producto)}}" method="POST"  enctype="multipart/form-data">
						@csrf @method('PATCH')

						@include('layouts.tipoproductolist')

						<div class="form-group row">

						<label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

						<div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{$producto->nombre}}" required autocomplete="nombre" autofocus>

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
                                <input id="precio" type="decimal" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{$producto->precio}}" required autocomplete="precio" autofocus>

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
                                <input id="genero" type="text" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{$producto->genero}}" required autocomplete="genero" autofocus>

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
                                <input id="uso" type="text" class="form-control @error('uso') is-invalid @enderror" name="uso" value="{{$producto->uso}}"  autocomplete="uso" autofocus>

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
                                <input id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{$producto->tipo}}"  autocomplete="tipo" autofocus>

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
                                <input id="diagnostico" type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico" value="{{$producto->diagnostico}}" autocomplete="diagnostico" autofocus>

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
                                <textarea id="descripcion" id="textArea" class="form-control @error('descripcion') is-invalid @enderror" row="10" cols="10" name="descripcion" required autocomplete="descripcion" autofocus>
                                    {{$producto->descripcion}}
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
                                <input id="imagen1" type="file" class="form-control-file" name="imagen1">
							</div>
						</div>

					<div class="row d-flex justify-content-center">
						<div class="col-md-4 text-center">
                              	<img src="{{Storage::url($producto->imagen1)}}" class="img-thumbnail rounded mx-auto d-block img-fluid" alt="Imagen Primaria">
                            </div>
					</div>

					<br>



						<div class="form-group row">

							<label for="imagen2" class="col-md-4 col-form-label text-md-right">{{ __('Imagen Secundaria') }}</label>

							<div class="col-md-6">
                                <input id="imagen2" type="file" class="form-control-file" name="imagen2">

                             </div>



						</div>

					<div class="row d-flex justify-content-center">
						<div class="col-md-4 text-center">
                              	<img src="{{Storage::url($producto->imagen2)}}" class="img-thumbnail rounded mx-auto d-block img-fluid" alt="Imagen Primaria">
                            </div>
					</div>

						<br>
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