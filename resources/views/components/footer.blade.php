@section('footer')
    <footer class="py-3 bg-dark" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <p class="m-0 text-center text-white">Acerca de nosotros | Terminos & Condiciones | Politica de privacidad</p>
                <p class="small text-white text-center">Todos los derechos reservados</p>
            </div>
                <div class="col-sm-4"></div>

            <div class="col-sm-2">
                <img src="{{ asset('img/face.png')}}" height="25px" width="25px" style="margin-right: 10px;">
                <img src="{{ asset('img/inst.png')}}" height="25px" width="25px" style="margin-right: 10px;">
                <img src="{{ asset('img/twit.png')}}" height="25px" width="25px">
            </div>
            </div>
        </div>

    </footer>
@endsection