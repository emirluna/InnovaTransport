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

        body{
            background-color: #cc0000;
        }

        #divl1{
            padding-left: 0px;
        }

        #divl2{
            display: none;
        }

        #divl3{
            margin-top: 100px;
        }




        @media screen and (max-width: 995px){
            #divl3{
                margin-top: 100px;
            }


        }

        @media screen and (max-width: 650px) {
            #divl2{
                display: block;
            }

            #divl1{
                display: none;
            }

            #divl3{
                margin-top: 40px;
                margin-bottom: 50px;
            }

            footer{
                position: relative;
                bottom: 0px;
            }
        }

        @media screen and (max-height: 950px) and  (max-width: 995px){

            #principal{
                margin-top: 30px;
            }

            #divl3{
                padding-top: 40px;
            }

            footer{
                position: relative;
                bottom: 0px;
                top: 50px;
            }

        }


    </style>


</head>


<body>

@yield('menu')

<div class="container-fluid">
<div class="row" style="height: 100px; background-color: #cc0000"></div>
</div>
<div id="principal" class="container-fluid text-white text-center">
    <div class="row">
        <h2 class="col-sm-12">Bienvenido</h2>
        <h4 class="col-sm-12">Inicia sesión en Innova Transport Pro</h4>
    </div>
    <div class="row" style="padding-left: 0px;">
        <div id="divl2" class="col-1 col-md-1 col-lg-1"></div>
        <div id="divl1" class="col-4 col-sm-5 col-md-6">
            <img src="{{ asset('img/Flogin.png')}}" width="95%" height="80%">
        </div>
        <div id="divl3" class="col-11 col-sm-10 col-md-5 col-lg-4">

            <form id="formLog" class="form-horizontal" method="POST"  action="{{ route('login') }}" >
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <!--<input id="email" type="text"  name="email" class="form-control font-weight-bold" value="{{ old('email') }}" required autofocus placeholder="E-mail">-->
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div><br>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-12">

                            <input id="password" type="password" name="password" class="form-control font-weight-bold" required placeholder="Contraseña">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <input type="hidden" name="remember" {{ old('remember') ? 'checked' : '' }}>

                    <br>

                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button id="enviar" type="submit" class="btn bg-white">
                                Iniciar sesión
                            </button>
                            <br><br>
                            <a class="" id="register" href="">
                                <b id="textBlack">¿Aún no tienes cuenta?</b><br>
                                <b id="textWhite">Registrate</b>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@yield('footer')

</body>
</html>