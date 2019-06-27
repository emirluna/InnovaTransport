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
    
                <section class="content ">




                <div class="container text-center">

<h1 style="margin-top: 50px; margin-bottom: 100px;">Choferes</h1>

<div class="row text-left">
<a href='/driver/create' style="color: #fff;"><button class="btn text-left btn-danger">Registrar Chofer</button></a>
</div>
<table class="table" style="margin-top: 50px;" >

    <tr style="border-top: none;">
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Información Adicional</th>
        <th>Dirección</th>
        <th>Opciones</th>
    </tr>

@if($count >= 1)         
    @foreach($chofer as $c)
        
        <tr>
            <td>{{$c->name}}</td>
            <td>{{$c->last_name}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->phone}}</td>
            <td><a class="nav-link" data-toggle="modal" data-target="#ModalThree" data-book-id="$c->email" href="">Info</a></td>
            <td><a class="nav-link" data-toggle="modal" data-target="#ModalTow" data-book-id="$c->address" href="">Dirección</a></td>
            
            
           
            <td>
                <a href="#"><img src="{{ asset('img/edit.png')}}" height="20px" width="20px"></a>
                <a href="#"><img src="{{ asset('img/delete.png')}}" height="20px" width="20px"></a>
            </td>
        </tr>

    @endforeach
@endif
        </table>

        </div>
    </div>


    <div id="ModalTow" class="modal" role="dialog" >
        <div class="modal-dialog modal-lg modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Direcciones</h4>
                <a href="#" style="color: #fff;"><button class="btn text-left btn-danger">Nueva dirección</button></a>
            </div>
            <div class="modal-body">
          
            <table class="table" style="margin-top: 50px;" >

    <tr style="border-top: none;">
        <th>Calle</th>
        <th>Numero</th>
        <th>Municipio</th>
        <th>Ciudad</th>
        <th>Pais</th>
        <th>Codigo Postal</th>
        <th>Opciones</th>
    </tr>
@if($count >= 1)
    @foreach($chofer as $d)
        @foreach($d->address as $a)
    
    <tr>
        <td>{{($a['street'])}}</td>
        <td>{{($a['number'])}}</td>
        <td>{{($a['town'])}}</td>
        <td>{{($a['city'])}}</td>
        <td>{{($a['country'])}}</td>
        <td>{{($a['zip_code'])}}</td>
        <td>
            <a href="#"><img src="{{ asset('img/edit.png')}}" height="20px" width="20px"></a>
        </td><td >
            <a href="#"><img src="{{ asset('img/delete.png')}}" height="20px" width="20px"></a>
        </td>
    </tr>
    
        @endforeach
    @endforeach
    </table>
@endif



                <div class="text-center">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
</div>









<div id="ModalThree" class="modal" role="dialog" >
    <div class="modal-dialog modal-lg modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Información Básica</h4>
                
            </div>
            <div class="modal-body">
          
            <table class="table" style="margin-top: none;" >

<tr style="border-top: none;">
    <th>Turno</th>
    <th>Numero de Licencia</th>
    <th>Tipo de licencia</th>
    <th>Fecha de vencimiento</th>
    <th>Opciones</th>
</tr>

@if($count >= 1)
    @foreach($chofer as $i)
        @foreach($i->driver_info as $a)
   
    <tr>
        <td>{{($a['turn'])}}</td>
        <td>{{($a['license_number'])}}</td>
        <td>{{($a['license_type'])}}</td>
        <td>{{($a['expiration_date'])}}</td>
        <td>
            <a href="#"><img src="{{ asset('img/edit.png')}}" height="20px" width="20px"></a>
        </td><td >
            <a href="#"><img src="{{ asset('img/delete.png')}}" height="20px" width="20px"></a>
        </td>
    </tr>
    
        @endforeach
    @endforeach
@endif

<tr style="border-top: none;">
<th colspan="5"><br><h4>Información Bancaria</h4></th>
</tr>
<tr style="border-top: none;">
    <th>Banco</th>
    <th>Numero de Cuenta</th>
    <th>Clabe Interbancaria</th>
    <th>Moneda</th>
    <th>Opciones</th>
</tr>

@if($count >= 1)
    @foreach($c->bank_info as $b)
    
    <tr>
        <td>{{($b['bank'])}}</td>
        <td>{{($b['number_account'])}}</td>
        <td>{{($b['clabe'])}}</td>
        <td>{{($b['currency'])}}</td>
        <td>
            <a href="#"><img src="{{ asset('img/edit.png')}}" height="20px" width="20px"></a>
        </td><td >
            <a href="#"><img src="{{ asset('img/delete.png')}}" height="20px" width="20px"></a>
        </td>
    </tr>
 
    @endforeach
   
@endif

</table>


                <div class="text-center">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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