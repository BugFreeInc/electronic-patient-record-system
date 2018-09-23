@extends('pharmacy.masterPharma') 
@section('mainContent')

<section id="">

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<br><br>
<h4>P_Id:</h4>
<h4>P_Name:</h4>
    </div>
    <div class="col-md-8">
      patient prescription history
    </div>
    
  </div>
  
</div>
  

</section>
@endsection()