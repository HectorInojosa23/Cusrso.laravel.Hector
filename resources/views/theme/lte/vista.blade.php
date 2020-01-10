<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
       
      <title>@yield('name', 'biblioteca')</title>

 <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/jqvmap/jqvmap.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.css")}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/summernote/summernote-bs4.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@yield('styles')


   </head>
  <body class="hold-transition sidebar-mini layout-boxed">

@include("theme/$theme/header")

@include("theme/$theme/aside")

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="contend">

@yield('contenido')



    </section>
  </div>
  <!-- /.content-wrapper -->


    @include("theme/$theme/footer")


<!-- jQuery -->
<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>

@yield('scripts')



    </body>
  </html>    