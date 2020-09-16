

  <div class="col-sm-12 row align-center justify-content-between">
            @forelse ($productos as $producto)
<div class="col-sm-6 col-md-6 showhim letsprub row" id="ps{{$producto->id}}" style="display:">
                <div class="card card-ecommerce shadow mb-5">
                    <div class="imProd">
                        <a href="{{route('producto.show' , $producto->id)}}">
                            <img  class="card-img-top img-fluid btnHover" src="{{Storage::url($producto->imagen1)}}" alt="PRODUCTO" style="heith:100%">
                            <br>
                        </a>
                    </div>
                    <div class="card-body text-center d-flex flex-column ">
                        <p class="card-text ">{{$producto->precio}}</p>
                        <div class="card-text">
                            <a href="{{route('producto.show' , $producto->id)}}">
                                <div class="card-header">
                                   <h5 class="card-title ">{{Str::substr($producto->nombre, 0 , 40)}}</h5>
                               </div>
                           </a>
                       </div>


                       <div  class="card-footer mt-auto showme">
                        <a href="#" class="btn btn-primary col-md-12">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>

          @empty
        <ul> No hay productos agregados</ul>
        @endforelse
        </div>