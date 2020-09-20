@extends('layouts.app')


@section('content')


@include('layouts.carouselIndex')

@include('layouts.index.destacadoslayout')

@include('layouts.index.promo1layout')

@include('layouts.index.masvistoslayouts')

@include('layouts.index.newsletterlayout')

@include('layouts.index.locales')

@include('layouts.index.promo2layout')


@endsection

@section('script')
	 <script>
  $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    mouseDrag:true,
   responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
  </script>
@endsection
