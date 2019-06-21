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

    <style>

    /*
      
        #div1{
            padding-left: 150px;
        }


      

        #item01{
            margin-bottom: 50px;
            padding-left: 150px;
            padding-right: 150px;
        }

        #text21{
            padding: 0px 50px 0px 50px;
            font-size: 20px;
        }

        #item0 p {
            font-size: 20px;
        }


   
        #img21{
                height: 400px;
                width: 600px;
            }


        @media only screen and (orientation: landscape) {
            #item01{
                margin-left: 50px;
            }

            #precios {
                padding-left: 0px;
            }

            .price{
                margin-right: 30px;
                margin-left: 30px;
            }

            #div1 {
                display: none;
            }

        }

        @media screen and (max-width: 900px) {
            #space1{
                height: 120px;
            }

            #img21{
                height: 300px;
                width: 100px;
            }

            #precios{
                padding-left: 0px;
            }

            #item01{
                margin-bottom: 0px;
                padding-left: 100px;
                padding-right: 100px;
            }

            @media only screen and (orientation: landscape) {
                #precios{
                    padding-left: 0px;
                }

         
            }

        }

        @media screen and (max-width: 600px) {
            #precios{
                padding-left: 0px;
            }

            .price{
                margin-right: 0px;
                margin-left: 25px;
            }

            #item01{
                margin-bottom: 20px;
                padding-left: 20px;
                padding-right: 20px;
            }

            @media only screen and (orientation: landscape) {
                #precios{
                    padding-left: 0px;
                    margin-right: 0px;
                    margin-left: 0px;
                }

                .price{
                    margin-right: 0px;
                    margin-left: 100px;
                }

                #item01{
                    margin-bottom: 20px;
                    padding-left: 20px;
                    padding-right: 20px;
                }

            }
        }*/


        #FirstSection{
            padding-bottom: 150px;
        }

        #space1{
            height: 100px;
            background-color: #cc0000
        }
        
        #item0{
            padding: 100px 80px 40px 90px;
        }


        #title2{
            padding-top: 50px;
        }

        #precios{
            padding-left: 100px;
        }

        .price{
            margin-top: 20px;
            margin-bottom: 20px;
            margin-right: 30px;
            margin-left: 50px;
        }

        .title, .price button{
            color: white;
        }

        .price h2{
            padding-top: 10px;
            padding-bottom: 5px;

        }

        .price h4{
            padding-top: 20px;
            padding-bottom: 30px;
        }

        .price button{
            background-color: #cc0000;
        }

        
        @media screen and (max-width: 995px) {
            #div1{
                display: none;
            }

            #text1{
                padding: 0px 0px 0px 0px;
            }

            #item0{
                padding: 100px 80px 40px 90px;
            }


            #img1{
                margin-left: 0px;
                margin-right: -30px;
                padding-top: 80px;
                padding-bottom: 0px;
                width: 450px;
                height: 430px;
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
        }

    </style>
</head>


<body>

@yield('menu')


<div  class="container-fluid">
    <div id="space1" class="row" ></div>

    <div id="FisrtSection" class="row text-white text-center" style="background-color: #cc0000">
        <div class="col-sm-12 col-md-9 col-lg-7" id="div1">
            <img src="{{ asset('img/precios.png')}}" class="img-fluid">
        </div>
        <div id="item0" class="col-sm-12 col-md-9 col-lg-5">
            <h1>Precios creados para tu empresa.</h1>
            <br><br>
            <p class="text-justify" id="text1">
            Selecciona el plan que mas le convenga a tu empresa
                o descrube nuestras opciones de acuerdo a tus necesidades.
            </p>
        </div>
    </div>
</div>




<div class="container-fluid text-center" style="background-color: whitesmoke">
    <div class="row">
        <div class="col-1 col-sm-2 col-lg-3"></div>

        <div class="col-10 col-sm-8 col-lg-6">
    <h2 class="col-sm-12" id="title2">¡Obten una suscripción creada para su empresa!</h2><br>
        <p class="col-sm-12 text-justify">Comience su prueba gratuita de 14 días y elige la suscripción que más
            te convenga. Si no encuentra la suscripción que cubra tus necesidades,
            solicita tu cotización en base al número de tus unidades.</p>
    </div>
    </div>
    <div class="container-fluid" id="precios" style="padding-bottom: 50px;"   >
        <div class="row text-center" style="padding-top: 50px;">


            <div class="col-11 col-sm-9 col-md-5 col-lg-3 bg-white price">
                <div class="row bg-danger">
                <h2 class="text-center col-sm-12 title">Pequeño</h2>
                </div>
                <h2>$249/mes</h2>
                <h4>Todas las carácteristicas<br>
                A partir de 1 Unidad</h4>

                <h5 class="text-danger">1 unidad</h5>
                <img src="{{ asset('img/camion2.png')}}" class="text-center">
                <button class="btn" style="margin-bottom: 40px;">Comprar ya</button>
            </div>


            <div class="col-11 col-sm-9 col-md-5 col-lg-3 bg-white price">
                <div class="row bg-danger">
                    <h2 class="text-center col-sm-12 title">Medio</h2>
                </div>
                <h2>$224.10/mes</h2>
                <h4>Todas las carácteristicas<br>
                    A partir de 5 Unidades</h4>

                <h5 class="text-danger">5 unidades</h5>
                <img src="{{ asset('img/camion2.png')}}" class="text-center">
                <button class="btn" style="margin-bottom: 40px;">Comprar ya</button>
            </div>


            <div class="col-11 col-sm-9 col-md-5 col-lg-3 bg-white price">
                <div class="row bg-danger">
                    <h2 class="text-center col-sm-12 title">Pro</h2>
                </div>
                <h2>$161.85/mes</h2>
                <h4>Todas las carácteristicas<br>
                    A partir de 10 Unidades</h4>

                <h5 class="text-danger">10 unidades</h5>
                <img src="{{ asset('img/camion2.png')}}" class="text-center">
                <button class="btn" style="margin-bottom: 40px;">Comprar ya</button>
            </div>
        </div>
    </div>

</div>


@yield('footer')


</body>
</html>
