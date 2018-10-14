<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Pharmacy Password Recovery Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link href="{{asset('frontEnd/images/logo.png')}}" rel="icon">
     <link rel="stylesheet" href="{{asset('doctor/assets/plugins/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('doctor/assets/css/login.css')}}" />
    <link rel="stylesheet" href="{{asset('doctor/assets/plugins/magic/magic.css')}}" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="{{asset('doctor/assets/img/pharmacistlogo.png')}}" id="logoimg" alt=" Logo" />
    </div>
    <div class="tab-content">
              
        <div id="login" class="tab-pane active">
            <form action="{{url('/pharmacy/resetPassword/showPage')}}" class="form-signin" method="POST">
                 {{ csrf_field() }}
         <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Verify Your Code   </p>
                    @if(Session('fail'))
    <p class="alert alert-danger">{{Session('fail')}}</p>

   @endif  

                <input type="text" name="code" placeholder="Verify Code" class="form-control" required />
               
                <button class="btn text-muted text-center btn-danger" type="submit">Submit</button>
            </form>
        </div>
     
      
        
    </div>
    


</div>

    <!--END PAGE CONTENT -->     
        
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="{{asset('doctor/assets/plugins/jquery-2.0.3.min.js')}}"></script>
      <script src="{{asset('doctor/assets/plugins/bootstrap/js/bootstrap.js')}}"></script>
   <script src="{{asset('doctor/assets/js/login.js')}}"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
