@section('menu')

        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">

            <div class="text-center">

                <div class="author-img" style="background-image: url({{ asset('images/logo.jpg') }}); color:white;"></div>

                <h3 style="color:white;" ><a href="">{{ Auth::user()->name }}</a></h3>

            </div>

            <nav id="colorlib-main-menu">

                <div class="collapse">

                    <ul>
                <li><a href="{{route('home')}}" >Inicio</a></li>
                <li><a href="{{route('enterprise.index')}}" >Empresa</a></li>
                <li><a href="{{route('account.index')}}" >Cuenta</a></li>
                <li><a href="{{route('security.index')}}" >Seguridad</a></li>
                <li><a href="{{route('vehicle.index')}}" >Transportes</a></li>
                <li><a href="{{route('departures.index')}}" >Salidas</a></li>
                <li><a href="{{route('arrivals.index')}}" >Llegadas</a></li>
                <li><a href="{{route('maintenance.index')}}" >Mantenimiento</a></li>
                <li><a href="{{route('billing.index')}}" >Facturación</a></li>
                <li><a href="{{route('manager.index')}}" >Gestor Documental</a></li>
                <li><a href="{{route('gps.index')}}" >Rastreo GPS</a></li>
                <li><a href="{{route('users.index')}}" >Usuarios</a></li>
                <li><a href="{{route('settings.index')}}" >Configuración</a></li>
                <li>

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

                    </ul>

            <i style="color: white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Todos los derechos reservados</i>

                </div>

            </nav>

        </aside>



@endsection