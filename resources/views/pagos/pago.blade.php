@extends('layouts.pagos')



<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="/procesar-pago" method="POST">
				<script
   				src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
   				data-button-label="Comprar"
   				data-elements-color="#8e44ad"
   				data-preference-id="<?php echo $preference->id; ?>">
  				</script>
			</form>
		</div>

		<div class="col-md-6">
		</div>
	</div>
</div>
