<div class="container-fluid mt-4" stlye="display:none;">
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
      <div class="col-md-6 row">
        <h2 class="text-center">{{$producto->nombre}}</h2>
        <h3 class="text-center">${{$producto->precio}}</h3>
        <br>
          <div class="col-md-12 text-center">
              <h3> Seleccione su receta: </h3>
                    <div class="input-group mb-3">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile">
                          <label class="custom-file-label" for="inputGroupFile" aria-describedby="inputGroupFileAddon">     Adjunte su receta:</label>
                      </div>
                    </div>
                    <div class="border rounded-lg text-center p-3 mb-3">
                        <img src="//placehold.it/140?text=RECETA" class="img-fluid" id="preview" />
                    </div>
            </div>

          <div class="col-md-12 text-center">
            <h3> 2 - Configure sus lentes </h3>

              <div class="col-md-12 d-md-flex justify-content-between">
                <div class="col-md-5 contentcont">
                  <a> Lente Izquierdo: </a>
                  <form>
                    <div class="form-group mt-2">
                      <select class="form-control text-center" required>
                        <option value="" disabled selected hidden>Izquierdo</option>
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
                  </form>
                </div>
                <div class="col-md-5 contentcont">
                  <a> Lente Derecho: </a>
                  <form>
                    <div class="form-group mt-2">
                      <select class="form-control text-center" required>
                        <option value="" disabled selected hidden>Derecho</option>
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
                  </form>
                </div>
              </div>
          </div>

          <div class="col-md-12 mt-4 d-md-flex">

              <div class="col-sm-12 col-md-3 align-left select-wrap">
                  <select class="form-control text-center" required>
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
              <button class="btn btn-primary col-md-12">Agregar al carrito</a>
            </div>

        </div>

       </div>



      </div>
    </div>

    <div class="col-md-12">

      <?php
            $productos = DB::table('productos')->get();
      ?>

        @include('layouts.index.masvistoslayouts')
    </div>

  </div>
</div>


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

 <script>


   $(document).ready(function(){

    // input plugin
    bsCustomFileInput.init();

    // get file and preview image
    $("#inputGroupFile").on('change',function(){
        var input = $(this)[0];
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }
    })

})


 </script>


  @endsection