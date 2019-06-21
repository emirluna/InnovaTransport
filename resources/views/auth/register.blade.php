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
</head>


<body>

@yield('menu')
<div class="container-fluid">
<div class="row" style="height: 100px; background-color: #cc0000"></div>
</div>
<div id="principal" class="container-fluid text-white text-center">
    <div class="row">
        <h2 class="col-sm-12">Es tiempo de mejorar</h2>
        <h4 class="col-sm-12">Comienza tu prueba gratuita ahora</h4>
    </div>
    <div class="row" style="padding-left: 0px;">
        <div id="div2" class="col-1 col-md-2"></div>
        <div id="div1" class="col-sm-4 col-lg-4 text-center">
            <div class="row">
                <img id="img1" src="{{ asset('img/render.png')}}" width="450px" height="350px">
            </div>
            <div class="row">
                <img id="img2" src="{{ asset('img/fondomap.png')}}" width="450px" height="230px">
            </div>
        </div>
        <div id="div3e" class="col-1 col-lg-2"></div>
        <div id="div3" class="col-sm-10 col-md-7 col-lg-5 align-content-center">
            
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="col-sm-12">
                    <input id="name" type="text" class="form-control text-field" name="name" required autofocus placeholder="Nombre">
                </div>

                <div class="col-sm-12">
                    <input id="last_name" type="text" class="form-control text-field" name="last_name"  required autofocus placeholder="Apellido">
                </div>

                <div class="col-sm-12">
                    <input id="phone" type="text" class="form-control text-field" name="phone"  required autofocus placeholder="Teléfono">
                </div>

                <div class="col-sm-12">
                    <input id="email" type="email" class="form-control text-field" name="email"  required placeholder="Correo eléctronico">
                </div>
            
                <div class="col-sm-5 custom-control-inline">
                    <input id="password" type="password" class="form-control text-field" name="password" required placeholder="Contraseña">
                </div>

                <div class="col-sm-5 custom-control-inline">
                    <input id="password" type="password" class="form-control text-field" name="password_confirmation" required placeholder="Repita contraseña">
                </div>

                <div class="col-sm-12">
                    <input id="enterprise_name" type="text" class="form-control text-field" name="enterprise_name" required placeholder="Nombre de la empresa">
                </div>


                <div class="col-md-12">
                    <button id="registrar" type="submit" class="btn bg-white">
                        Registrarse
                    </button>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-link font-weight-bold" href="{{ route('login') }}">
                        <p id="textBlack">¿Ya tienes una cuenta?</p><p id="textWhite">Inicia sesión</p>
                    </a>
                </div>

                <div class="col-md-12 font-weight-bold">
                    <p id="textBlack">Al registrarse se estarán aceptado los</p>
                    <p id="textWhite">términos y condiciones de uso.</p>
                </div>


            </form>

        </div>
    </div>
</div>

@yield('footer')

</body>
</html>