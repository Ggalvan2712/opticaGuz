@extends('layouts.pagos')

<div class="">
	<div class="row">
		<div class="col-md-12 row">
			<div class="col-md-6" style="border-right: 1px solid rgb(226 , 226 , 229)">
				<div class="col-md-12 text-center">
					<img src="{{Storage::url('logo2.png')}}"/>
				</div>
				<div class="col-md-12">
						@if(!session('checkout'))
						<form action="{{route('checkoutSession')}}" method="POST" id="checkout">
						@csrf
							@include('pagos.layouts.formcontacto')
							@include('pagos.layouts.formenvios')

						</div>
						</form>
						@else
							@include('pagos.layouts.enviosession')
						@endif


				</div>
			</div>

			<!-- PRODUCTOS -->

			<div class="col-md-6">

				@include('pagos.layouts.detalles')
				@include('pagos.layouts.modal')


			</div>
		</div>
	</div>
</div>