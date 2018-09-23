<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{asset('admin/j.js')}}"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title> Admin Template</title>

  <!-- Favicons -->
  <link href="{{asset('admin/img/favicon.png')}}" rel="icon">
  <link href="{{asset('admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
  

</head>

<body>
  <section id="container">
   
    <!--header start-->
       @include('admin.includesAdmin.header_admin')

    <!--header end-->
    
    <!--sidebar start-->
       @include('admin.includesAdmin.slider_admin')
    
    <!--sidebar end-->
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
    
                  @yield('maincontent')

    </section>
    </section>
 
    <!--footer start-->
       @include('admin.includesAdmin.footer_admin')

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('admin/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('admin/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('admin/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('admin/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('admin/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  
</body>

</html>
