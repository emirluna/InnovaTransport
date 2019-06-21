@section('menu')

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top font-weight-bold" id="menu" style="background-color: #cc0000;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img id="logo1" src="{{ asset('img/LogoNuevo2.png')}}" width="140px" height="80px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto" style="font-size: large;">
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/'}}">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'features'}}">Caracteristicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'prices'}}">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'login'}}">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'register'}}">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


@endsection
