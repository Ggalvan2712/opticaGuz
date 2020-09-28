<?php
	$promo = DB::table('promociones')->first();
  ?>

<div class="container-fluid no-padding">


    <div class="col-md-12 mt-1 mb-1">
      <img src=" {{Storage::url($promo->promocion1)}}" alt="placeholder 960" class="img-responsive w-100" />
    </div>

</div>