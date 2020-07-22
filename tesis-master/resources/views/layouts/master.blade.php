<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Complejo turístico - @yield('title')</title>
    <!-- Font Awesome (son los iconos optimizar, descargar)
    Si no cargan usar secure_asset-->
    <link rel="stylesheet" href="{{secure_asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!-- Bootstrap core CSS-->
    <link href="{{asset('general/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap-->
    <link href="{{asset('general/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) (optimizar minificar)-->
    <link href="{{asset('general/css/style.css')}}" rel="stylesheet">
    <!-- Diseño para los iconos sociales (optimizar minificar)-->
    <link href="{{asset('general/icons/font.css')}}" rel="stylesheet">
    <link href="{{asset('general/icons/style-icons.css')}}" rel="stylesheet">

    <link href="/general/img/favicon.png" rel="icon">

</head>    

<body>
    @include('includes.menu')
    @yield('content')
    @include('includes.footer')

    <!--<div class="social-bar" id="barra">
        <a href="https://www.facebook.com" class="icon icon-facebook"></a>
        <a href="#" class="icon icon-whatsapp"></a>
        <a href="https://www.instagram.com" class="icon icon-instagram"></a>
    </div>-->
</body>

<!-- SCRIPTS -->
<!-- JQuery -->

<script src="https://code.jquery.com/jquery-3.1.1.min.js">
<script type="text/javascript" src="{{asset('general/js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('general/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('general/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('general/js/mdb.min.js')}}"></script>
<!--Scrips específicos de esta página-->


<script>
// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

<script>
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>

<script type="text/javascript" src="{{asset('general/js/addons/datatables.min.js')}}"></script>

<script>
$(function () {
  $('.material-tooltip-main').tooltip({
    template: '<div class="tooltip md-tooltip-main"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner-main"></div></div>'
  });
})
</script>

</html>
