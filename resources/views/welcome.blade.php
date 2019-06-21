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
        .space{
            margin-bottom: 30px;
        }

        #text1{
            padding: 0px 50px 120px 50px;
            font-size: 20px;
        }

        #SecondSection{
            background-image: url({{ asset('img/BannerC.png')}});
            height: 620px;
            width: 101.9%;
            margin-right: -20px;
            margin-left: -20px;
        }

        #item0{
            padding: 100px 80px 40px 90px;
        }

        #item1{
            padding-top: 250px;
            padding-left: 200px;
        }

        #img1{
            margin-left: 150px;
            padding-top: 110px;
        }

        #item2{
            /*height: 110%;
            width: 90%;
            margin-left: 150px;
            padding-top: 175px;
*/
            padding-top: 20px;
            padding-left: 200px;
        }


        #item2i{
            padding-top: 20px;
            padding-left: 100px;
            padding-right: 150px;
        }

        #list1{
            padding-top: 80px;
        }


        #item3{
            padding-top: 20px;
            padding-left: 200px;
        }

        #item3i{
            padding-top: 20px;
            padding-left: 100px;
            padding-right: 150px;
        }

        #img3{
            margin-left: 150px;
        }

        #space1{
            height: 150px;
            background-color: #cc0000
        }

        @media screen and (max-width: 995px) {
            #div1{
                display: none;
            }

            #space1{
                height: 50px;
            }

            #text1{
                padding: 0px 0px 0px 0px;
            }

            #item0{
                padding: 100px 80px 40px 90px;
            }


            #item1{
                padding-top: 160px;
                padding-left: 100px;
            }

            #item1 h2, #item2 h2, #item3 h2{
                font-size: 22px;
            }

            #img1{
                margin-left: 0px;
                margin-right: -30px;
                padding-top: 80px;
                padding-bottom: 0px;
                width: 450px;
                height: 430px;
            }


            #item2{
                padding-top: 30px;
                padding-left: 30px;
            }

            #item2i{
                padding-top: 40px;
                padding-left: 0px;
                padding-right: 80px;
            }

            #list1{
                padding-top: 40px;
            }

            #list1 li h3, #list2 li h3{
                font-size: 16px;
                text-align: justify;
            }


            #img2{
                margin-top: 190px;
                width: 450px;
                height: 160px;
            }


            #item3{
                padding-top: 20px;
                padding-left: 20px;
            }



            #item3i{
                padding-top: 0px;
                padding-left: 10px;
                padding-right: 75px;
            }

            #img3{
                margin-left: 80px;
                margin-top: 55px;
            }

            #SecondSection{
                background-image: url({{ asset('img/BannerC.png')}});
                height: 620px;
                width: 105.9%;
                margin-right: -20px;
                margin-left: -20px;
            }
        }

        @media screen and (max-width: 600px){

            #item0{
                padding: 90px 20px 30px 20px;
            }


            #text1{
                padding: 0px 0px 0px 0px;
                font-size: 20px;
            }

            #item1{
                padding-top: 50px;
                padding-left: 20px;
                padding-right: 20px;
                font-size: 14px;
            }
            #img1{
                margin-left: 20%;
                padding-top: 0%;
                padding-bottom: 0px;
                width: 85%;
                height: 90%;
            }

            #SecondSection{
                background-image: url({{ asset('img/BannerC.png')}});
                height: 620px;
                width: 110.5%;
                margin-right: -20px;
                margin-left: -20px;
            }
        }

    </style>
</head>


<body>

@yield('menu')

<div  class="container-fluid">
    <div id="space1" class="row" ></div>

    <div id="FisrtSection" class="row text-white text-center" style="background-color: #cc0000">
        <div class="col-sm-12 col-md-9 col-lg-7" id="div1">
            <img src="{{ asset('img/primera.png')}}" class="img-fluid">
        </div>
        <div id="item0" class="col-sm-12 col-md-9 col-lg-5">
            <h1>Una forma segura de administrar tus entregas</h1>
            <br><br>
            <p class="text-justify" id="text1">
                La seguridad de tu carga comienza aquí,
                Innova Transport Pro te brinda lo que necesitas
                para tu negocio y la satisfacción de tus clientes.
            </p>
        </div>
    </div>
</div>

    <div id="SecondSection" class="container-fluid">
    <!--<img src="{{ asset('img/BannerC.png')}}">-->
        <div class="row" style="padding-top: 200px">
            <div class="col-md-3"></div>
            <div class="col-lg-8 text-center font-weight-bold">
                <div class="row">
                    <div class="col-8 col-lg-6 text-right"><h2 style="color: red">Innova Transport</h2></div>
                    <div class="col-4 col-lg-6 text-left"><h2>Pro</h2></div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-sm-10 col-lg-8"><p class="text-justify" style="font-size: 20px;" >
                            Somos una plataforma creada especialmente para todas aquellas empresas
                            destinadas al manejo de autotransportes de carga.
                            Brindando grandes beneficios y seguridad para la administración de tus entregas.
                        </p></div>
                </div>

            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

<!--Carousel-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox" >
        <div class="carousel-item active" style="background-image: url({{ asset('img/fondo.png')}})">
            <div class="row">
                <div id="item1" class="col-sm-6 text-center">
                    <h2 class="text-white">Brinda a tus usuarios un servicio completo con nuestra aplicación móvil</h2>
                </div>
                <div class="col-sm-6">
                    <img id="img1" src="{{ asset('img/manocel.png')}}" height=680px" width="500px" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url({{ asset('img/fondo.png')}});">
            <div class="row">
                <div  id="item2" class="col-sm-12 text-center" >
                    <h2 id="text2" class="text-white">Dale seguridad a tus clientes</h2>
                </div>
                <div class="col-sm-6">
                    <img id="img2" src="{{ asset('img/manos.png')}}" class="img-fluid">
                </div>
                <div id="item2i" class="col-sm-6 text-center">
                    <ul id="list1" class="text-left text-white" >
                        <li><h3>Cononce el lugar exacto que se encuentra tu cargamento en tiempo real.</h3></li>
                        <li><h3>Revisa si tu cargamento va a corde al tiempo estimado.</h3></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url({{ asset('img/fondo.png')}})">
            <div class="row">
                <div id="item3" class="col-sm-12 text-center">
                    <h2 class="text-white">Administra todo desde tu tablero</h2>
                </div>
                <div class="col-sm-6" style="bottom: 0px;">
                    <img id="img3" src="{{ asset('img/Dashboard.png')}}" height="90%" width="70%" class="img-fluid">
                </div>
                <div id="item3i" class="col-sm-6 text-center">
                    <ul id="list2" class="text-left text-white" style="padding-top: 80px;" type="circle">
                        <li><h3>Inicia sesión y lleva el control desde tu tablero.</h3></li>
                        <li><h3>Agrega tus usuarios y clientes.</h3></li>
                        <li><h3>Registra tus unidades y lleva el control sobre sus salidas, mantenimientos y viáticos.</h3></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<div id="FourthSection" class="container-fluid" style="padding-left: 100px; padding-right: 100px;">
    <div class="row" style="margin-top: 60px; margin-bottom: 40px">
        <div class="text-center col-sm-12">
            <h2 style="color: red;">Una plataforma completa para tu empresa</h2>
            <p>Explora nuestras caraacteristicas creadas para ti</p>
        </div>
        <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 0px; padding-right: 20px; margin-bottom: 20px">
            <img src="{{ asset('img/gps.png')}}" width="50px" height="35px">
            <h4>Ubicación en tiempo real</h4>
            <p>Conoce la ubicación exacta, movimientos y acciones que realiza cada unidad.</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
            <img src="{{ asset('img/camion.png')}}" width="60px" height="40px">
            <h4>Gestión de transporte</h4>
            <p>Controla el inventario de tus unidades de transporte por categoría</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
            <img src="{{ asset('img/reporte.png')}}" width="50px" height="40px">
            <h4>Reportes digitales</h4>
            <p>Podras generar reportes de la información de las caracteristicas que te ofrece la plataforma</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-12 col-sm-6 col-md-3 text-center" style="padding-left: 20px; padding-right: 20px; margin-bottom: 20px">
            <img src="{{ asset('img/usuarios.png')}}" width="50px" height="40px">
            <h4>Control de usuarios</h4>
            <p>Registra a tus usuarios categorizandolos por tipo y funciones</p>
            <hr width="100px" style="background-color: #cc0000;">
        </div>

        <div class="col-sm-12 text-center" style="padding-top: 50px;">
            <a href="features" style="color: #000; text-decoration: none;">
                <button class="btn" style="border-color: #cc0000; border-width: 3px; color: black">Explorar más caracteristicas</button>
            </a>
        </div>

    </div>

</div>


<div id="FithSection" class="container-fluid" style="background-color: black; color: white; padding-top: 50px; padding-bottom: 50px;">
    <div class="row" style="background-color: black; color: white; padding-left: 50px; padding-right: 50px;">
        <div class="col-sm-8 text-center">
            <h2>Comienza tu prueba gratuita ahora!</h2>
            <p>Registrate y obten 14 días de prueba</p>
        </div>
        <div class="col-sm-4 text-center" style="padding-top: 20px;">
            <button class="btn" style="background-color: #cc0000; color: white;">Prueba gratis</button>
        </div>
    </div>
</div>



<div id="Contact" class="container-fluid" style="padding-top: 50px; padding-bottom: 20px;">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Podemos ayudarte</h2>
            <p>Si no encuentras lo que necesitas o requieres información adicional ponte en contacto con nosotros</p>

        </div>
    </div>
</div>

<div class="container-fluid">
    <form class="form">
        <div class="row">
            <div class="col-1 col-sm-2 col-lg-3"></div>
            <div class="col-5 col-sm-4 col-lg-3">
                <input type="text" class="form-control col-sm-12 border-dark space" placeholder="Nombre" required="required">
            </div>
            <div class="col-5 col-sm-4 col-lg-3">
                <input type="email" class="form-control col-sm-12 border-dark space" placeholder="Email" required="required">
            </div>
        </div>
        <div class="row">
            <div class="col-1 col-sm-2 col-lg-3"></div>
            <div class="col-5 col-sm-4 col-lg-3">
                <input type="number" class="form-control col-sm-12 border-dark space" placeholder="Teléfono" required="required">
            </div>
            <div class="col-5 col-sm-4 col-lg-3">
                <input type="text" class="form-control col-sm-12 border-dark space" placeholder="Empresa" required="required">
            </div>
        </div>
        <div class="row">
            <div class="col-1 col-sm-2 col-lg-3"></div>
            <div class="col-10 col-sm-8 col-lg-6">
                <textarea placeholder="Mensaje" class="form-control col-sm-12 border-dark space" required="required"></textarea>
            </div>
        </div>
        <div class="row" style="margin-bottom: 30px;">
            <div class="text-center col-sm-12 space">
                <button class="btn" style="background-color: #cc0000; color: white;">Enviar</button>
            </div>
        </div>
    </form>
</div>
@yield('footer')
</body>
</html>
