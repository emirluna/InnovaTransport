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

                <h2 style="margin-top: 50px;   ">Registro de Vehiculo</h2>
                            <form id="formReg" class="form-inline" method="POST" action="/users">
                                    {{ csrf_field() }}

                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-12 col-form-label">Vin</label>

                                        <div class="col-sm-12">
                                            <input id="vin" type="text" class="form-control" name="vin"  required autofocus>

                                          
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <label for="last_name" class="col-md-12 col-form-label">Marca</label>

                                        <div class="col-sm-12">
                                            <input id="brand" type="text" class="form-control" name="brand"  required autofocus>

                                          
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <label for="last_name" class="col-md-12 col-form-label">Modelo</label>

                                        <div class="col-md-12">
                                            <input id="model" type="text" class="form-control" name="model"  required autofocus>

                                       
                                        </div>
                                    </div>
                                </div>    



                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <label for="last_name" class="col-md-12 col-form-label">Color</label>

                                        <div class="col-md-12">
                                            <input id="color" type="text" class="form-control" name="color" required autofocus>

                                       
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="fuel_type" class="col-md-12 col-form-label">Tipo de combustible</label>

                                        <div class="col-sm-12">
                                            <select id="fuel_type" name="fuel_type" class="form-control" style="width: 45%">
                                                <option value="Magna">Magna</option>
                                                <option value="Premium">Premium</option>
                                                <option value="Diesel">Diesel</option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <label for="last_name" class="col-md-12 col-form-label">Fuel Performance</label>

                                        <div class="col-md-12">
                                            <input id="fuel_performance" type="text" class="form-control" name="fuel_performance"  required autofocus>
                                       
                                        </div>
                                   </div>
                                </div>            

                                <div class="col-sm-12 col-lg-6">
                                   <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <label for="spare_wheel" class="col-md-12 col-form-label">Llanta de Repuesto</label>

                                        <div class="col-md-12">
                                            <input id="spare_wheel" type="checkbox" class="form-control" name="spare_wheel" autofocus>
                                       
                                        </div>
                                   </div>
                                </div>


                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="phone" class="col-md-12 col-form-label">Numero de Ejes</label>

                                        <div class="col-md-12">
                                            <input id="axis" type="text" class="form-control" name="axis"  required autofocus>

                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="phone" class="col-md-12 col-form-label">Capacidad de carga/arrastre</label>

                                        <div class="col-md-12">
                                            <input id="weigth_capacity" type="text" class="form-control" name="weigth_capacity"  required autofocus>
                                            
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="fuel_type" class="col-md-12 col-form-label">Tipo de Vehiculo</label>

                                        <div class="col-sm-12">
                                            <select id="Type" name="fuel_type" class="form-control" style="width: 45%">
                                                <option value="truk">Caja Cerrada</option>
                                                <option value="truk_open">Caja Abierta</option>
                                                <option value="tank">Cilindro</option>
                                                <option value="fifth_wheel">Quinta Rueda</option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                </div>





                                        
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