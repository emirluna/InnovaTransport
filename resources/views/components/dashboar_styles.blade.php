@section('Style_Home')
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Innova Transport Pro</title>

<!-- Bootstrap core CSS -->
<link href={{ asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">

<!-- Custom styles for this template -->
<link href={{ asset('dashboard/css/simple-sidebar.css')}} rel="stylesheet">


<style>

/*
* Component: Small Box
* --------------------
*/
.small-box {
border-radius: 2px;
position: relative;
display: block;
margin-bottom: 20px;
box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}
.small-box > .inner {
padding: 10px;
}
.small-box > .small-box-footer {
position: relative;
text-align: center;
padding: 3px 0;
color: #fff;
color: rgba(255, 255, 255, 0.8);
display: block;
z-index: 10;
background: rgba(0, 0, 0, 0.1);
text-decoration: none;
}
.small-box > .small-box-footer:hover {
color: #fff;
background: rgba(0, 0, 0, 0.15);
}
.small-box h3 {
font-size: 38px;
font-weight: bold;
margin: 0 0 10px 0;
white-space: nowrap;
padding: 0;
}
.small-box p {
font-size: 15px;
}
.small-box p > small {
display: block;
color: #f9f9f9;
font-size: 13px;
margin-top: 5px;
}
.small-box h3,
.small-box p {
z-index: 5;
}
.small-box .icon {
-webkit-transition: all 0.3s linear;
-o-transition: all 0.3s linear;
transition: all 0.3s linear;
position: absolute;
top: -10px;
right: 10px;
z-index: 0;
font-size: 90px;
color: rgba(0, 0, 0, 0.15);
}
.small-box:hover {
text-decoration: none;
color: #f9f9f9;
}
.small-box:hover .icon {
font-size: 95px;
}
@media (max-width: 767px) {
.small-box {
text-align: center;
}
.small-box .icon {
display: none;
}
.small-box p {
font-size: 12px;
}
}
/*
* Component: Box
* --------------
*/

hr{ 

border:         none;
border-left:    1px solid hsla(200, 10%, 50%,100);
height:         10vh;
width:          1px;       
}



</style>


</head>
@endsection