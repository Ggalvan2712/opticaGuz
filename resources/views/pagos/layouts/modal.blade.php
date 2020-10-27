<?php
$valor = 0;
?>

@foreach(session('cart') as $id => $detalles)
<?php $valor += $detalles["precio"] * $detalles["cantidad"] ?>
@endforeach


<?php

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-105481852962620-081019-6ca8f28e0406946b801fe36dca3784ee-66140615');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

$preference->payment_methods = array(
 "excluded_payment_types" => array(
    array("id" => "ticket")
  ),
  "installments" => 12,


);

$preference->back_urls = array(
    "success" => "optica.test",
    "failure" => "optica.test/carrito",
);


$envios = session()->get('checkout');

$carrito = session()->get('cart');
$descripcion = '';

$preference->binary_mode = true;

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Optica Guzman';
$item->quantity = 1;
$item->unit_price = $valor;

foreach($carrito as $carritoItem){
  $descripcion .= $carritoItem["nombre"] .' ';
}

$item->description = $descripcion;


if(isset($envios)){
$payer = new MercadoPago\Payer();
$payer->email = $envios['contacto'];
$payer->phone = array(
    "area_code" => "381",
    "number" => $envios['telefono']
  );
$payer->address = array(
    "street_name" => $envios['calle'],
    "street_number" => $envios['numero'],
    "zip_code" => $envios['cp']
  );
$payer->identification = array(
    "type" => "DNI",
    "number" => $envios['dni']
  );
$payer->name = $envios['nombre'];
$payer->surname = $envios['apellido'];

$preference->payer = $payer;
}

$preference->items = array($item);
$preference->save();

?>



<div class="modal fade" id="enviosModal" tabindex="-1" role="dialog" aria-labelledby="filtrosModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="enviosModalLabel">Politica de Envios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card h-100">
               <div class="text-center">
                <p class="">Durante el primer periodo de nuestra tienda online, los productos solamente van a tener envios dentro de la <a style="font-weight:bold;">PROVINCIA DE TUCUMAN </a>, y estaran a cargo del comprador. Por lo tanto, lo unico que se esta pagando en este momento , es el valor de los productos.

                    Por cualquier consulta o duda sobre los envios, se pueden comunicar con nosotros mediante nuestro whatsapp: <a href="whatsapp.opticaguzman.com">CLICK AQUI</a></p>
               </div>
        </div>
      <div class="modal-footer">
        <div class="col-md-12 text-center">
            <form action="/procesar-pago" method="POST">
                    <script
                        src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                        data-button-label="Finalizar Compra"
                        data-elements-color="#4d7737"
                        data-preference-id="<?php echo $preference->id; ?>">
                    </script>
            </form>
        </div>

      </div>
    </div>
  </div>
</div>