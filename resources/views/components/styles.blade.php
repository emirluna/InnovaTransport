@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <head lang="{{ app()->getLocale() }}">
<link rel="stylesheet" href={{ asset('css/animate.css') }}>
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href={{ asset('css/icomoon.css') }}>
<!-- Bootstrap  -->
<link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
<!-- Flexslider  -->
<link rel="stylesheet" href={{ asset('css/flexslider.css') }}>
<!-- Flaticons  -->
<link rel="stylesheet" href={{ asset('fonts/flaticon/font/flaticon.css') }}>
<!-- Owl Carousel -->
<link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
<link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css') }}>
<!-- Theme style  -->
<link rel="stylesheet" href={{ asset('css/style.css') }}>
{!! Html::script('js/modernizr-2.6.2.min.js')!!}
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection