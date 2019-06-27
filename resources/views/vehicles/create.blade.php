@include('components.menuDash')
@include('components.footerDash')
@include ('components.dashboar_styles')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

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



            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Formulario de registro</div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="/users">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="Name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <label for="last_name" class="col-md-4 control-label">Apellido</label>

                                        <div class="col-md-6">
                                            <input id="last_name" type="text" class="form-control" name="LastName" value="{{ old('last_name') }}" required autofocus>

                                            @if ($errors->has('last_name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="phone" class="col-md-4 control-label">Teléfono</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="Phone" value="{{ old('phone') }}" required autofocus>

                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Correo eléctronico</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                        <label for="username" class="col-md-4 control-label">Nombre de Usuario</label>

                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control" name="username" required>

                                            @if ($errors->has('username'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Contraseña</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Repita contraseña</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('Type') ? ' has-error' : '' }}">
                                        <label for="Type" class="col-md-4 control-label">Tipo</label>


                                        <div class="col-md-6">
                                            <select id="Type" name="Type" class="form-control">
                                                <option value="Admin">Administrador</option>
                                                <option value="Office">Empleado de Oficina</option>
                                                <option value="Driver">Chofer</option>
                                                <option value="Client">Cliente</option>
                                            </select>



                                            @if ($errors->has('Type'))

                                                <span class="help-block">
                                        <strong>{{ $errors->first('Type') }}</strong>
                                    </span>

                                            @endif
                                        </div>

                                    </div>




                                    <div class="form-group{{ $errors->has('Status') ? ' has-error' : '' }}">
                                        <label for="Status" class="col-md-4 control-label">Tipo</label>


                                        <div class="col-md-6">
                                            <select id="Status" name="Status" class="form-control">
                                                <option value="1">Activo</option>
                                                <option value="2">Inactivo</option>
                                            </select>



                                            @if ($errors->has('Type'))

                                                <span class="help-block">
                                        <strong>{{ $errors->first('Type') }}</strong>
                                    </span>

                                            @endif
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Registrar
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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