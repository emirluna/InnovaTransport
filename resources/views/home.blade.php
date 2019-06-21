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

   
        <div class="container-fluid ">


        @if(Auth::user()->enterprise()->first()->status != 0)
        
        
            
                 <section class="content ">
                     <!-- Small boxes (Stat box) -->
                     <div class="row" style="margin-top: 100px; margin-left: 250px;">
        
                         <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                             <div class="small-box bg-aqua">
                                  <div class="inner">
                                     <div class="row">
                                       <div class="col-sm-6">
                                          <img src="{{ asset('img/usuarios.png')}}" class="img-fluid">
                                       </div>
                                   <div>
                                    <hr>
                                    </div>
                                    <div class="col-sm-5">
            
                                     <h3>13</h3>
                                     <p>Usuarios</p>
                                    </div> 
                                 </div>
                             <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                                <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
                            </div>
                            </div>
                        </div>
                            <!-- ./col -->
                        <div class="col-lg-3 col-xs-6"  style="margin-left: 200px;">

                            <!-- small box -->
                                            <div class="small-box bg-aqua">
                                  <div class="inner">
                                     <div class="row">
                                       <div class="col-sm-6">
                                          <img src="{{ asset('img/team.png')}}" class="img-fluid">
                                       </div>
                                   <div>
                                    <hr>
                                    </div>
                                    <div class="col-sm-5">
            
                                     <h3>20</h3>
                                     <p>Clientes</p>
                                    </div> 
                                 </div>
                             <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                                <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
                            </div>
                            </div>
                        </div>
                        </div>







                        <div class="row" style="margin-top: 100px; margin-left: 250px;">
                              <!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-aqua">
                                  <div class="inner">
                                     <div class="row">
                                       <div class="col-sm-6">
                                          <img src="{{ asset('img/camion.png')}}" class="img-fluid">
                                       </div>
                                   <div>
                                    <hr>
                                    </div>
                                    <div class="col-sm-5">
            
                                     <h3>15</h3>
                                     <p>Unidades</p>
                                    </div> 
                                 </div>
                             <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                              <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
                            </div>
                            </div>
                        </div>
                                <!-- ./col -->
                            <div class="col-lg-3 col-xs-6" style="margin-left: 200px;">
                                <!-- small box -->
                                <div class="small-box bg-aqua">
                                  <div class="inner">
                                     <div class="row">
                                       <div class="col-sm-6">
                                          <img src="{{ asset('img/truck.png')}}" class="img-fluid">
                                       </div>
                                   <div>
                                    <hr>
                                    </div>
                                    <div class="col-sm-5">
            
                                     <h3>11</h3>
                                     <p>Entregas</p>
                                    </div> 
                                 </div>
                             <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                                <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
                            </div>
                            </div>
                        </div>
                                <!-- ./col -->
                        </div>
                    </div>

            
   
   
   
         

        
        
        
        
        
        
        @elseif(Auth::user()->enterprise()->first()->status == 0)
        
        <div class="alert alert-success" role="alert">
        <p>Para acceder a todas las funciones del sistema, proporcione los datos de la empresa</p>
        </div>

        <div class="container text-center">
            <!--"EnterpriseController@update,{{Auth::user()->enterprise()->first()->_id}}   -->
            <h2 style="margin-top: 10px;   ">Datos de la empresa</h2>        
                <form id="formReg" class="form-inline" method="POST" action="{{'enterprise'}}">
                {{ csrf_field() }}
                <input type="hidden" name="id_company" value="{{Auth::user()->enterprise()->first()->_id}}">
                <div class="col-sm-12 col-lg-4">
                    <div class="form-group">
                        <label for="name" class="col-sm-12 col-form-label">Nombre de la empresa</label>
                        <div class="col-sm-12">
                            <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->enterprise()->first()->company_name }}" required autofocus>
                     </div>
                    </div>
                </div>



                <div class="col-sm-12 col-lg-4">
                    <div class="form-group">
                        <label for="last_name" class="col-sm-12 col-form-label">Razon Social/ Giro</label>
                        <div class="col-sm-12">
                            <input id="sr" type="text" class="form-control" name="sr"  required autofocus>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-lg-4"">
                    <div class="form-group">
                        <label for="last_name" class="col-sm-12 col-form-label">RFC</label>
                        <div class="col-sm-12">
                            <input id="rfc" type="text" class="form-control" name="rfc"  required autofocus>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="form-group">
                        <label for="phone" class="col-sm-12 col-form-label">Teléfono</label>
                        <div class="col-sm-12">
                            <input id="phone" type="number" class="form-control" name="phone"  required autofocus>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12 col-lg-4">
                    <div class="form-group">
                        <label for="email" class="col-sm-12 col-form-label">Correo eléctronico</label>
                        <div class="col-sm-12">
                            <input id="email" type="email" class="form-control" name="email"  required>
                        </div>
                    </div>

                </div>



              
                <div class="col-sm-12 col-lg-12 text-center"><br>
                    <h3 class="col-sm-12">Dirección</h3>
                </div>


                <div class="col-sm-12 col-lg-4">
                    <div class="form-group">
                        <label for="street" class="col-sm-12 col-form-label">Calle</label>
                        <div class="col-sm-12">
                            <input id="street" type="text" class="form-control" name="street" required>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="form-group">
                        <label for="number" class="col-sm-12 col-form-label">Número</label>
                        <div class="col-sm-12">
                            <input id="number" type="number" class="form-control" name="number" required>
                        </div>
                    </div>
                </div> 


                <div class="col-sm-12 col-lg-4 text-center">
                    <div class="form-group">
                        <label for="zipcode" class="col-sm-12 col-form-label">Codigo Postal</label>
                        <div class="col-sm-12">
                            <input id="zipcode" type="number" class="form-control" name="zip_code" required>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-12 col-lg-12">
                    <div class="form-group">
                        <label for="state" class="col-sm-12 col-form-label">Estado</label>
                        <div class="col-sm-12">
                            <select id="state" name="state" class="form-control" style="width: 75%">
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua </option>
                                <option value="Ciudad de México">Ciudad de México </option>
                                <option value="Coahuila">Coahuila </option>
                                <option value="Colima">Colima </option>
                                <option value="Durango">Durango </option>
                                <option value="Guanajuato">Guanajuato </option>
                                <option value="Guerrero">Guerrero </option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="México">México</option>
                                <option value="Michoacán">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo León">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosí">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Yucatán">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="form-group">
                        <label for="city" class="col-sm-12 col-form-label">Ciudad</label>
                        <div class="col-sm-12">
                            <input id="city" type="text" class="form-control" name="city" required>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="form-group">
                        <label for="town" class="col-sm-12 col-form-label">Localidad</label>
                        <div class="col-sm-12">
                            <input id="town" type="text" class="form-control" name="town" required>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="enterprise_id" value="{{Auth::user()->enterprise()->first()->_id}}">

                <input type="hidden" name="status" value=1>

                <input type="hidden" name="country" value="México">

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







        
    @endif


    @yield('footerD')
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="dashboard/vendor/jquery/jquery.min.js"></script>
<script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
