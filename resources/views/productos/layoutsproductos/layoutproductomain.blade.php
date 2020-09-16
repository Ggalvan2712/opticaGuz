<div class="col-md-9 row">
            <div class="col-md-12" id="filterCard" style="display:none;">

                <h3 href="{{route('productos.index')}}">Productos</h3>
                <br>
                    <div class="card shadow mb-5 bg-softgrey row" style="height:40%;">

                        <div class="mt-auto mb-auto pl-5 col-md-6">
                            <a style="font-weight: bold; color:#505250;">Ordernar Por: </a>

                            <select class="form-field mt-auto mb-auto" id="product_grid_sort">

                                  <option value="manual">
                                    Características
                                  </option>

                                  <option value="best-selling" selected="selected">
                                    Más vendidos
                                  </option>

                                  <option value="title-ascending">
                                    Alfabéticamente, A-Z
                                  </option>

                                  <option value="title-descending">
                                    Alfabéticamente, Z-A
                                  </option>

                                  <option value="price-ascending">
                                    Precio, menor a mayor
                                  </option>

                                  <option value="price-descending">
                                    Precio, mayor a menor
                                  </option>

                                  <option value="created-ascending">
                                    Fecha: antiguo(a) a reciente
                                  </option>

                                  <option value="created-descending">
                                    Fecha: reciente a antiguo(a)
                                  </option>
                            </select>
                        </div>


                    </div>
                    <br>
             </div>

             @forelse ($productos as $producto)


            <div class="col-sm-6 col-md-6 col-lg-3 showhim justify-content-between letsprubs" id="p{{$producto->id}}" style="display:">
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


                       <div  class=" mt-auto showme col-md-12">
                        <a href="#" class="btn btn-primary col-md-12">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>

        @empty
        <ul> No hay productos agregados</ul>
        @endforelse
</div>

