 <nav class="navbar navbar-expand-sm navbar-light bg-opticgreen mt-auto fixd-bottom">
            <div class="container d-none d-lg-inline-flex">
                        <div class="col-xl-2 col-lg-2">
                            <a class="navbar-brand float-left"  href="{{ url('/') }}">
                                <img src="{{Storage::url('public/logoblanco.png')}}" style="widht:200px; height:60px">
                            </a>
                         </div>
                        <!-- FIN LOGO -->

                        <div class="col-xl-1 col-lg-1">
                        </div>


                        <!-- INICIO DATOS -->
                     <div class="col-md-5 row justify-content-between">

                            <div class="index-hover">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                         <a class="nav-link" href="{{route('index')}}"><span class="Index-menu">INICIO</span></a>
                                    </li>
                                </ul>
                            </div>


                            <div class="index-hover">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('productos.index')}}" ><span class="Index-menu">PRODUCTOS</span></a>
                                     </li>
                                </ul>
                            </div>

                            <div class="index-hover">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link"><span class="Index-menu" href="">NOSOTROS</span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="index-hover">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link"><span class="Index-menu" href="">CONTACTO</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
        </nav>


        <div class="col-md-12 text-center bg-opticgreen">
            <a href="#" class="">
                Desarrollado por Gustavo Galvan  &copy
            </a>
        </div>


