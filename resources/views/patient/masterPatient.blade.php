<!DOCTYPE html>
<html>
<head>
<script src="{{asset('doctor/j.js')}}"></script>
<link href="{{asset('frontEnd/images/logo.png')}}" rel="icon">
<link rel="stylesheet" type="text/css" href="{{asset('doctor/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('doctor/css/style.css')}}">

</head>
<body>
<title>Patient Home Page</title>

@include('patient.includePatient.headerPatient')
@include('patient.includePatient.patientInfo')
<section id="main-content" style="min-height: 342px">
     @yield('mainContent')
    </section>


<!-- footer -->

 @include('patient.includePatient.footerPatient') 

 


<script src="{{asset('doctor/js/jquery.js')}}"></script>
<script src="{{asset('doctor/js/bootstrap.min.js')}}"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




</body>
</html>