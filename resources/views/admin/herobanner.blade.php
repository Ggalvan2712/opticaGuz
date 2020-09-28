@extends('layouts.app')

 @section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Agregar Marcas') }}</div>

                	<div class="card-body">

						<form method="POST" enctype="multipart/form-data" action={{route('hero.store')}} >
                        @csrf
								<div class="form-group d-block">

                    <div class="form-group row">

                          <label for="herobanner" class="col-md-4 col-form-label text-md-right">{{ __('Agregar Hero:') }}</label>

                            <div class="col-md-6">
                                <input id="herobanner" type="file" class="form-control-file" name="herobanner">
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