@section('menu')

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top font-weight-bold" id="menu">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img id="logo1" src="{{ asset('img/LogoC.png')}}" width="230px" height="80px">
                <img id="logo2" src="{{ asset('img/LogoBlanco.png')}}" width="240px" height="80px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto" style="font-size: large;">
                    <li class="nav-item active">
                        <a class="nav-link" href="#inicio">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gps">Rastreo</a>
                    </li>
                    <li class="nav-item"  id="feature">
                        <a class="nav-link" href="#features">Caracteristicas</a>
                    </li>
                    <li class="nav-item"  id="precio">
                        <a class="nav-link" href="#precios">Precios</a>
                    </li>
                    <li class="nav-item">
                        <!--<button class="text-light" data-toggle="modal" data-target="#myModal" style="background-color: transparent; border-style: none; ">Open Modal</button>-->
                        <a class="nav-link" data-toggle="modal" data-target="#myModal"  href="">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#ModalTow"  href=" ">Registrarse</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <script src="dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            if ($("#menu").offset().top > 56) {
                $("#logo2").hide();
                $("#logo1").show();
            } else {
                $("#logo1").hide();
                $("#logo2").show();
            }

        });

        $(window).scroll(function() {
            if ($("#menu").offset().top > 56) {
                $("#menu").addClass("bg-white");
                $("#menu").removeClass("bg-transparent");
                $("#menu").removeClass("navbar-dark");
                $("#menu").addClass("navbar-light");
                $("#logo2").hide();
                $("#logo1").show();
            } else {
                $("#menu").removeClass("bg-white");
                $("#menu").addClass("bg-transparent");
                $("#menu").addClass("navbar-dark");
                $("#menu").removeClass("navbar-light");
                $("#logo1").hide();
                $("#logo2").show();
            }

        });


    </script>

@endsection