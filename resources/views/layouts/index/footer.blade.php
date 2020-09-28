@include('layouts.index.newsletterlayout')
<div class="col-md-12">
    <div class="col-md-12  d-none d-md-block">
        <div class="row justify-content-between">
            <div class="col-md-3">
                <div class="float-right">
                    <img src="{{Storage::url('public/logo2.png')}}" style="widht:200px; height:150px">
                </div>
            </div>

            <div class="col-md-3">
                <div class="col-md-12 text-right mt-3" style="font-family: Helvetica; font-weight:bold;">
                        MAPA DEL SITIO
                </div>
                <div class="col-md-12 mt-1 d-md-block">
                    <ul class="footerlist float-right">
                        <a href="{{route('index')}}">
                            <li class="footerli">INICIO</li>
                        </a>
                        <a href="{{route('productos.index')}}">
                            <li class="footerli">PRODUCTOS</li>
                        </a>
                        <a href="#">
                            <li class="footerli">NOSOTROS</li>
                        </a>
                        <a href="#">
                            <li class="footerli">CONTACTO</li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">

                <div class="col-md-12 text-center mt-3" style="font-family: Helvetica; font-weight:bold;">
                       SUBSCRIBITE A NUESTRA NEWSLETTER
                </div>
                <div class="col-md-12 mt-1 text-center" style="font-weight:bold;">
                    <p>Recibi las noticias y novedades periodicamente en tu correo electronico.</p>
                </div>
                <div class="col-md-12 mt-1 text-center" style="font-weight:bold;">
                    <div class="col-md-9 mr-auto ml-auto">
                        <input type="email" class="form-control" placeholder="tuemail@opticaguzman.com">
                    </div>
                </div>
                <div class="col-md-12 mt-1 text-center" style="font-weight:bold;">
                    <div class="col-md-9 mr-auto ml-auto">
                        <a class="btn btn-primary col-md-12" style="color: white;"> SUBSCRIBITE </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 row mt-2">
       <div class="col-md-6 text-center">
            <div class="col-md-12">
                <a style="color:#4d7737; font-weight:bold; font-family:helvetica;"> SEGUINOS EN NUESTRAS REDES: </a>
                <a class="flaticon-045-facebook" style="color:#4d7737"></a>
                <a class="flaticon-007-whatsapp" style="color:#4d7737"></a>
                <a class="flaticon-034-instagram" style="color:#4d7737"></a>
            </div>
       </div>

       <div class="col-md-6 float-right">
        <div class="col-md-12 text-center">
            <a href="https://www.linkedin.com/in/gustavo-adrian-galvan-590708149/"> Desarrollado por Gustavo Galvan &copy</a>
        </div>
       </div>
    </div>
</div>

