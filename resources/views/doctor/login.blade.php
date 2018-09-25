<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Doctor Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
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
        <img src="{{asset('doctor/assets/img/doctorlogo.jpg')}}" id="logoimg" alt=" Logo" />
    </div>
    <div class="tab-content">
              
        <div id="login" class="tab-pane active">
            <form action="{{url('/checkDr')}}" class="form-signin" method="POST">
            @csrf
            @if(count($errors)>0)
                @foreach($errors->all() as $error )
               <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                 @endif
                
                
                 @if(session('status'))
                <p class="alert alert-danger">{{session('status')}}</p>
                 {{Session::forget('Status')}}
                  @endif

              @if(session('signup'))
              <p class="alert alert-success">{{session('signup')}}</p>
             
               @endif

                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your username and password   </p>
                <input type="text" name="RegID" placeholder="ID No." class="form-control" required />
                <input type="password" name="password" placeholder="Password" class="form-control" required />
                <button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>
         <div id="signup" class="tab-pane">
            <form action="{{url('/signupDr')}}" class="form-signin" method="POST">
            @csrf
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                @if(count($errors)>0)
                @foreach($errors->all() as $error )
               <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                 @endif
                 <input type="text" name="name" placeholder="Dr. Name" class="form-control" />
                 <input type="text" name="RegID" placeholder="Register No." class="form-control" />
                <input type="text" name="Qualification" placeholder="Qualification " class="form-control" />
                <input type="text" name="Specialist" placeholder="Specialist" class="form-control" />
                
                <input type="email" name="email" placeholder="Email" class="form-control" />
                <input type="password" name="password" placeholder="Type Password" class="form-control" />

                <input type="password" name="password_confirmation" placeholder="Re type password" class="form-control" />
                <button class="btn text-muted text-center btn-success" name="" type="submit">Register</button>
            </form>
        </div>
        
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
              <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
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
