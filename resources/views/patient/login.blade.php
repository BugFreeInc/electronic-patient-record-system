<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Patient Login Page</title>
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
        <img src="{{asset('doctor/assets/img/patient.png')}}" id="logoimg" alt=" Logo" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="{{url('/checkPatient')}}" class="form-signin"  method="POST" >
            @csrf
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your username and password
                    @if(count($errors)>0)
                @foreach($errors->all() as $error )
               <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                 @endif

                  @if(session('status'))
                <h3 class="text-center text-danger">{{session('status')}}</h3>
                
                 {{Session::forget('Status')}}
                  @endif

              @if(session('signup'))
              <h3 class="text-center text-success">{{session('signup')}}</h3>
             
               @endif
                </p>
                <input type="text" placeholder="NID" name="nid" class="form-control" required />
                <input type="password" placeholder="Password" name="password" class="form-control" required />
                <button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="{{ url('/patient/resetPassword/CodeVerification') }}" class="form-signin" method="POST">
                  {{ csrf_field() }}
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail </p>
                <input type="email" name="email" required="required" placeholder="Your E-mail"  class="form-control" required />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>
         <div id="signup" class="tab-pane">
            <form action="{{url('/signingPatient')}}" class="form-signin" method="POST">
            @csrf
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                @if(count($errors)>0)
                @foreach($errors->all() as $error )
               <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                 @endif
                 <input type="text" placeholder="Patient Name" name="name" class="form-control" required/>
                 <input type="text" placeholder="NID No." name="nid" class="form-control" required/>
                <input type="email" placeholder="Your E-mail" name="email" class="form-control" required/>
                <input type="password" placeholder="password" name="password" class="form-control" required/>
                <input type="password" placeholder="Re type password" name="password_confirmation" class="form-control" required/>
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
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
