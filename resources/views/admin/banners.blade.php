@extends('layouts.app')

 @section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Agregar Marcas') }}</div>

                	<div class="card-body">

						<form method="POST" enctype="multipart/form-data" action={{route('promos.update' , 2)}} >
                @method('PATCH')
							@csrf
								<div class="form-group d-block">

                    <div class="form-group row">

                          <label for="promocion1" class="col-md-4 col-form-label text-md-right">{{ __('Banner 1') }}</label>

                            <div class="col-md-6">
                                <input id="promocion1" type="file" class="form-control-file" name="promocion1">
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-md-4 text-center">
                                <img src="{{Storage::url($promo->promocion1)}}" class="img-thumbnail rounded mx-auto d-block img-fluid" alt="Imagen Primaria">
                                </div>
                          </div>

                    </div>

                    <div class="form-group row">

                          <label for="promocion2" class="col-md-4 col-form-label text-md-right">{{ __('Banner 2') }}</label>

                            <div class="col-md-6">
                                <input id="promocion2" type="file" class="form-control-file" name="promocion2">
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-md-4 text-center">
                                <img src="{{Storage::url($promo->promocion2)}}" class="img-thumbnail rounded mx-auto d-block img-fluid" alt="Imagen Primaria">
                                </div>
                          </div>

                    </div>


                  </div>
								<div class="form-group row mb-4">
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