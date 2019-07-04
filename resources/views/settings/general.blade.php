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
    
                <img src="{{ asset('img/Construcción.png')}}" width="102%" height="100%" style="margin-left: -12px;">

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