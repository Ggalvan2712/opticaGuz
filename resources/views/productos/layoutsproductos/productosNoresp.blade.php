<div class="container-fluid" stlye="display:none;">
	<div class="row">
		<div class="col-md-12 d-md-flex" id="ShowProdNoresp">
			<div class="col-md-5">
				<img src="{{Storage::url($producto->imagen1)}}" class="w-100">
				<div class="col-md-12 d-none d-md-flex">
					<div class="col-md-4">
						<img src="{{Storage::url($producto->imagen1)}}" class="w-100">
					</div>
					<div class="col-md-4">
						<img src="{{Storage::url($producto->imagen2)}}" class="w-100">
					</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-6">
				<h2>{{$producto->nombre}}</h2>
				<h3>${{$producto->precio}}</h3>
				<br>
					<div class="col-md-12 d-md-flex">
						<div class="col-sm-12 col-md-3 align-left select-wrap">

							<select class="form-control" required>
								<option value="" disabled selected hidden>Cantidad</option>
								<option value="1">1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
								<option value="10" >10</option>
							</select>
						</div>

						<div class="col-sm-12 col-md-9">
							<button class="btn btn-primary col-md-9">Agregar al carrito</a>
						</div>
					</div>

					<div class="col-md-12 mt-4">
						{!! parsedown($producto->descripcion) !!}
					</div>
			</div>
		</div>

	</div>
</div>