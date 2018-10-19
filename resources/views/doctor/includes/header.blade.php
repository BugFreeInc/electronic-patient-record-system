<section id="navbar">
    <div class="container">
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/doctorHomepage')}}">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/generalPrescribe')}}">General Prescribe <span class="sr-only">(current)</span></a></li>
         <li><a href="{{url('/patientHistory')}}">Patient History</a></li>
         <li><a onclick="myFunction()">Print this Page</a></li>
        

<script>
function myFunction() {
    window.print();
}
</script>
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      
        <li><a href="{{url('/DrOut')}}"><button type="submit" class="btn btn-light" name="logout">Log Out</button></a></li>
       
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</section>
