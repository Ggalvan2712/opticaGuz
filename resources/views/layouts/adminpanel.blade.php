 <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown">
                             <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Promocines</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('promos.index')}}">Banners</a>
                                <a class="dropdown-item" href="{{route('hero.index')}}">Hero</a>
                                </div>
                        </li>


                     <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('marca.index')}}">Marca</a>
                                <a class="dropdown-item" href="{{route('estilos.index')}}">Estilo</a>
                                <a class="dropdown-item" href="{{route('tipoProducto.index')}}">Tipo de Producto</a>
                                <a class="dropdown-item" href="{{route('productos.index')}}">Productos</a>

                    </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Pedidos') }}</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                                </li>



                    </ul>
                </div>
            </div>
        </nav>

