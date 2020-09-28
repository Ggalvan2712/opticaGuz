
<div class="">
        <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm d-none d-lg-flex" id="navbar1" style="display:;">
            <div class="container d-none d-lg-inline-flex">
                        <div class="col-xl-2 col-lg-2">
                            <a class="navbar-brand float-left"  href="{{ url('/') }}">
                                <img src="{{Storage::url('public/logo.png')}}" style="widht:200px; height:35px">
                            </a>
                         </div>
                        <!-- FIN LOGO -->

                        <div class="col-xl-1 col-lg-1">
                        </div>

                        <!-- INICIO DATOS -->
                        <div class="">
                            <div class="">
                                <div class="col-md-12">
                                    <a style="color:#4d7737; font-weight:bold; font-family:helvetica;"> SEGUINOS EN NUESTRAS REDES: </a>
                                    <a class="flaticon-045-facebook" style="color:#4d7737" href="https://www.facebook.com/OpticaGuzmanTuc"></a>
                                    <a class="flaticon-007-whatsapp" style="color:#4d7737" href="http://whatsapp.opticaguzman.com"></a>
                                    <a class="flaticon-034-instagram" style="color:#4d7737"></a>
                                </div>
                            </div>
                        </div>
                 <!-- LOGIN // REGISTER -->
                        <div class="col-xl-4 col-lg-2">
                            <ul class="navbar-nav float-right">
                                    <!-- Authentication Links -->
                                @guest

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                        </li>
                                    @endif
                                @else

                                 <li class="nav-item">
                                            <a class="nav-link fa fa-shopping-cart" style="font-size:150%" href="{{ route('register') }}"></a>
                                </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                        <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('logout')}}">Cerrar Sesión</a>
                                    </li>


                             @endguest
                                    </ul>
                        </div>
            </div>
         </nav>


          <nav class="navbar navbar-expand-sm navbar-light bg-opticgreen">
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

                 <!-- LOGIN // REGISTER -->
                        <div class="col-xl-4 col-lg-2">
                            <ul class="navbar-nav float-right">

                                <li class="nav-item">
                                           <input type="text" class="form-control"name="Buscar" placeholder="¿Qué estas buscando?">
                                </li>

                             </ul>
                        </div>
            </div>
         </nav>
</div>
