@section('MenuD')
    <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><img id="logo2" src="{{ asset('img/LogoBlanco.png')}}" width="240px" height="80px"> </div>
        <div class="list-group list-group-flush">
        
@if(Auth::user()->enterprise()->first()->status != 0)

    @if(Auth::user()->role=="admin")
                
                <a href="#" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/CasaB.png')}}" width="25px" height="25px" style="margin-right: 10px;"> Inicio
                </a>
                
            

                <a data-toggle="collapse" href="#collapseUsers" role="button" aria-expanded="false" aria-controls="collapse" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/UsersB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Usuarios
                </a>
                <div class="collapse" id="collapseUsers">
                    <a href='/office/index' class="list-group-item list-group-item-action ">  Usuarios de Oficina</a>   
                    <a href='{{url('choferes',array('id'=>Auth::user()->enterprise_id))}}' class="list-group-item list-group-item-action ">  Choferes</a>   
                </div>




                <a data-toggle="collapse" href="#collapseCustomers" role="button" aria-expanded="false" aria-controls="collapse" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/TeamB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Clientes
                </a>
                <div class="collapse" id="collapseCustomers">
                    <a href='{{url('clientes',array('id'=>Auth::user()->enterprise_id))}}' class="list-group-item list-group-item-action ">  Ver Clinetes</a>   
                </div>

                <a href='/vehicle' class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/CamionB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Transportes
                </a>

                <a href='{{url('vehiculos',array('id'=>Auth::user()->enterprise_id))}}' class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/DateB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Salidas
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/DateB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Llegadas
                </a>

                <a href="#" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/GPSB.png')}}" width="25px" height="25px" style="margin-right: 10px;">GPS
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/GasolineB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Rendimiento
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/SettingsB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Mantenimiento
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/DolarB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Viaticos
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/BarraB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Casetas
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/PeriodicoB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Reportes
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/DocumentB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Facturación
                </a>

      @elseif(Auth::user()->role="driver")
                <a href="#" class="list-group-item list-group-item-action ">Mantenimiento</a>
                <a href="#" class="list-group-item list-group-item-action ">Viaticos</a>
      @elseif(Auth::user()->role=="office")
                <a href="#" class="list-group-item list-group-item-action ">Salidas</a>
                <a href="#" class="list-group-item list-group-item-action ">Llegadas</a>
      @endif

@elseif(Auth::user()->enterprise()->first()->status == 0)
                
        @if(Auth::user()->role=="admin")   
                <a data-toggle="collapse" href="#collapseUsers" role="button" aria-expanded="true" aria-controls="collapse" class="list-group-item list-group-item-action ">
                    <img src="{{ asset('img/IconosBlancos/UsersB.png')}}" width="25px" height="25px" style="margin-right: 10px;">Configuración
                </a>
                <div class="collapse show" id="collapseUsers">
                    <a href="#" class="list-group-item list-group-item-action ">  Cuenta</a>   
                    <a href="#" class="list-group-item list-group-item-action ">  Empresa</a>   
                    
                </div>
        @endif
@endif
            
        </div>
    </div>


    <!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

        <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
-->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="menu-toggle">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="dropdown ml-lg-auto mr-5">
            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" style="text-transform: capitalize; ">{{ Auth::user()->name }}
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cuenta</a></li>
                <li><a class="dropdown-item" href="#">Configuación</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a></li>


            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </nav>
@endsection