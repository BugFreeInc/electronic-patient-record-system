@extends('doctor.master') 
@section('mainContent')

<section id="slidebar">
    <div class="container">
    <div class="row">
        <div class="col-md-4">
        <form class="navbar-form navbar-left" role="search" method="POST" action="{{url('/showPres')}}">
  <div class="form-group">
  @csrf
    <input type="text" class="form-control" placeholder="Search by NID" name="nid">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<ul>
    <li><h3>Patiant Name</h3></li>
    
</ul>
        </div>
        <div class="col-md-8">

 


<input type="text" id="myInput"  placeholder="Search for names.."  class="form-control">
@if(session('ck'))
{{session('ck')}}
@endif
<br><br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Disease</th>
      <th>Checkup By</th>
      <th>Date</th>
      <th>Action</th>
      
      
    </tr>
  </thead>
  <tbody id="myTable">

  @if (isset($data))
    @foreach($data as $userData)
	  <tr>
		<td>{{$userData->Diseaseinfo}}</td>
		<td>{{$userData->DrName}}</td>
		<td>{{$userData->Date}}</td>
		<td><a href="{{url('/showFullPres/'.$userData->id)}}">Show</a></td>
	



	</tr>

@endforeach
@endif
    
  </tbody>
</table>












        </div>
        
    </div>
                
                
                  
        
</section>

<script>
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection()