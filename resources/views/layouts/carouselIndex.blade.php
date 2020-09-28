<?php
  $activo = DB::table('hero_banners')->where('activo', '=' , 1)->first();
  $heroBanner = DB::table('hero_banners')->where('activo' , '!=' , 1)->get();

?>
<div class="">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  	     <div class="carousel-inner">
           <div class="carousel-item active">
              <img class="d-block w-100" src="{{Storage::url($activo->imagen)}}" alt="First slide">
            </div>

          @forelse($heroBanner as $heroBannerItem)
            <div class="carousel-item">
              <img class="d-block w-100" src="{{Storage::url($heroBannerItem->imagen)}}" alt="First slide">
            </div>
           @empty
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://www.tiagooptica.com/wp-content/uploads/2020/06/rayban_banner.jpg" alt="First slide">
             </div>
           @endforelse
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>


