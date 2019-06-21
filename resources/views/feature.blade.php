@include('layouts.menu')
@include('layouts.footer')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Innova Transport Pro</title>

    <!-- Bootstrap core CSS -->
    <link href={{ asset('css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{ asset('css/full-slider.css')}} rel="stylesheet">

<style>
    #text1{
        padding: 100px 80px 40px 90px;
    }

    #FourthSection{
        padding-left: 100px;
        padding-right: 100px;
    }

    #third{
        padding-left: 200px;
        padding-top: 200px;
    }

    .itemt{
        margin-left: 75px;
        margin-bottom: 50px;
        align-content: center;
    }

    #img2{
        margin-top: 100px;
    }


    #registro{
        height: 120px;
        padding-top: 40px;
    }

    #registro button{
        border-width: 2px;
        border-color: #cc0000;
    }

    @media screen and (max-width: 995px) {
        #text1{
            padding: 0px 0px 0px 20px;
        }

        #FourthSection{
            padding-left: 40px;
            padding-right: 40px;
        }

        #third{
            padding-left: 30px;
            text-align: center;
        }

        .itemt{
            margin-left: 0px;
            margin-top: 0px;

        }

        #registro{
            height: 160px;
            padding-bottom: 40px;
        }

        #registro {
            padding-top: 60px;
        }

    }

    @media screen and (max-width: 600px) {

        #text1{
            margin-right: 10px;
            padding-right: 0px;
        }

       #FourthSection{
           padding-left: 30px;
           padding-right: 30px;
       }

    }


    @media only screen and (orientation: landscape) {


    }

</style>
</head>


<body>


@yield('menu')

<section>
<div class="row" style="height: 150px; background-color: #cc0000">
</div>
<div id="FisrtSection" class="row text-white text-center" style="background-color: #cc0000">
    <div class="col-sm-12 col-md-6 col-lg-7">
        <img src="{{ asset('img/CelularRuta.png')}}" class="img-fluid">
    </div>
    <div id="text1" class="col-sm-12 col-md-6 col-lg-5">
        <h1>Las mejores caracteristicas para tu empresa.</h1>
        <br><br>
        <p class="text-justify" style="padding: 0px 50px 120px 50px; font-size: 20px;">
            Innova Transport Pro te brinda todo en una sola plataforma,
            desde gestión de usuarios, hasta la aplicación móvil para tus usuarios.
        </p>
    </div>
</div>
</section>



<!--<div id="FourthSection" class="container-fluid">-->
<section>
    <div class="row" style="margin-top: 60px; margin-bottom: 40px">
        <div class="text-center col-sm-12">
            <h2 style="color: red;">Las mejores herramientas para tu empresa</h2>
            <p>Caracteristicas pensadas para ti</p>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center" >
            <img src="{{ asset('img/usuarios.png')}}" width="50px" height="40px">
            <h4>Control de usuarios</h4>
            <p class="">Registra a tus usuarios categorizandolos por tipo y funciones</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center" >
            <img src="{{ asset('img/camion.png')}}" width="60px" height="50px">
            <h4>Gestión de transporte</h4>
            <p class="">Controla el inventario de tus unidades de transporte por categoría</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center" >
            <img src="{{ asset('img/icons/gasoline.png')}}" width="50px" height="35px">
            <h4>Rendimiento de transporte</h4>
            <p>Conoce el rendimiento de cada unidad de transporte mediante la estimación de recorrido y el consumo de litros.</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center" >
            <img src="{{ asset('img/icons/settings.png')}}" width="50px" height="40px">
            <h4>Mantenimiento de transporte</h4>
            <p>Conoce información de tus unidades de transporte en proceso de mantenimietno generando un reporte digital.</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>



        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center" >
            <img src="{{ asset('img/icons/gps.png')}}" width="50px" height="35px">
            <h4>Ubicación en tiempo real</h4>
            <p>Conoce la ubicación exacta, movimientos y acciones que realiza cada unidad.</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center" >
            <img src="{{ asset('img/icons/date.png')}}" width="60px" height="40px">
            <h4>Asignación de salidas</h4>
            <p>Registra nuevas salidas o viajes a tus unidades de transporte y asignaas a alguno de tus operadores, llevando un control por fechas</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center" >
            <img src="{{ asset('img/icons/team.png')}}" width="50px" height="40px">
            <h4>Control de clientes</h4>
            <p>Controla el registro de tus clientes para darles acceso a la apicación y permitirles observar que pasa con su carga</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center">
            <img src="{{ asset('img/icons/money.png')}}" width="50px" height="40px">
            <h4>Gestión de viaticos</h4>
            <p>Conoce los gastos que genera la unidad de transporte en cada salida asignada incluyendo gasolina, casetas y gastos de operadores.</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center">
            <img src="{{ asset('img/icons/report.png')}}" width="60px" height="40px">
            <h4>Facturación</h4>
            <p>Solicita tu factura con nosotros</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center">
            <img src="{{ asset('img/icons/barra.png')}}" width="50px" height="40px">
            <h4>Gestión de casetas</h4>
            <p>Podras conocer el número de casetas que hay durante el recorrido y el total de pago según las caracteristicas de cada unidad.</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center">
            <img src="{{ asset('img/icons/periodico.png')}}" width="50px" height="40px">
            <h4>Reportes digitales</h4>
            <p>Podrás generar reportes de la información de las caracteristicas que te ofrece la plataforma</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

    </div>
</section>


<!--<div id="FourthSection" class="container-fluid" style="background-color: #cc0000; color: white; padding-top: 100px; padding-bottom: 100px;">-->
<section style="background-color: #cc0000; color: white; padding-bottom: 100px;">
    <div class="row" >
        <div id="third" class="col-md-4 col-lg-5 ">
            <div class="row itemt" style="margin-top: 25px;">
                <div class="col-sm-3 col-lg-3"><img src="{{ asset('img/icons/UsersB.png')}}"  width="50px" height="40px"  /></div>
                <div class="col-sm-9 col-lg-9 "><h4>Dale acceso a todos tus usuarios</h4></div>
            </div>
            <div class="row itemt" >
                <div class="col-sm-3 col-lg-3"><img src="{{ asset('img/icons/CamionRB.png')}}"  width="50px" height="40px" /></div>
                <div class="col-sm-9 col-lg-9 "><h4>Mide el tiempo de tus unidades</h4></div>
            </div>
            <div class="row itemt" >
                <div class="col-sm-3 col-lg-3"><img src="{{ asset('img/icons/gpsB.png')}}"  width="50px" height="40px" /></div>
                <div class="col-sm-9 col-lg-9 "><h4>Visualiza la ruta en tiempo real</h4></div>
            </div>
            <div class="row itemt" >
                <div class="col-sm-3 col-lg-3" ><img src="{{ asset('img/icons/apoyarB.png')}}"  width="50px" height="40px" /></div>
                <div class="col-sm-9 col-lg-9 "><h4>Permite a tus choferes comunicarse</h4></div>
            </div>
        </div>
        <div id="img2" class="col-md-8 col-lg-7">
            <img src="{{ asset('img/Celulares.png')}}"class="img-fluid" >
        </div>
    </div>

</section>


<section>
<div class="container-fluid">
    <div class="row text-center" id="registro">
    <div class="col-sm-6"><h2>Es tiempo de mejorar!</h2></div>
    <div class="col-sm-6"><a><button class="btn btn-light">Registrate ahora</button></a></div>
    </div>
</div>

</section>


@yield('footer')


</body>
</html>