@include('components.menuDash')
@include('components.footerDash')
@include ('components.dashboar_styles')

        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Innova Transport Pro</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('dashboard/css/simple-sidebar.css')}}" rel="stylesheet">

</head>


<body>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@yield('Style_Home')

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->

    @yield('MenuD')


    <div class="container text-center">

        <h2 style="margin-top: 50px;">Nuevo Cliente</h2>
        <form id="formReg" class="form-inline" method="POST" action="{{ route('customer.store') }}">
            {{ csrf_field() }}
            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="name" class="col-sm-12 col-form-label">Nombre</label>
                    <div class="col-sm-12">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                </div>
            </div>



            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="last_name" class="col-sm-12 col-form-label">Apellido</label>
                    <div class="col-sm-12">
                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="phone" class="col-sm-12 col-form-label">Teléfono</label>
                    <div class="col-sm-12">
                        <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                    </div>
                </div>
            </div>



            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="email" class="col-sm-12 col-form-label">Correo eléctronico</label>
                    <div class="col-sm-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>

            </div>



            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="password" class="col-sm-12 col-form-label">Contraseña</label>
                    <div class="col-sm-12">
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                </div>
            </div>

            
            <input type="hidden" name="rol" value="Customer">

            <input type="hidden" name="enterprise_id" value="{{ Auth::user()->enterprise_id}}">

            <input type="hidden" name="status" value="1">


            <div class="col-sm-12"><br>
                <div class="form-group">
                    <div class="col-sm-12 col-lg-12">

                        <button type="submit" class="btn btn-danger">
                            Registrar
                        </button>
                    </div>

                </div>
            </div>
        </form>





    </div>
</div>
<!-- /#page-content-wrapper -->
@yield('footerD')
                </div>
    <!-- /#page-content-wrapper -->

            </div>
<!-- /#wrapper -->
</div>
<!-- Bootstrap core JavaScript -->
<script src="../dashboard/vendor/jquery/jquery.min.js"></script>
<script src="../dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>