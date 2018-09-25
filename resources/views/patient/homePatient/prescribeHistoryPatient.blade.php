@extends('patient.masterPatient') 
@section('mainContent')

<section id="slidebar" class="text-center">
	<div class="container">
		<h3>Prescribe Record</h3>
	<div class="row">

		<div class="col-md-12">

 


<input type="text" id="myInput"  placeholder="Search for names.."  class="form-control">

<br>
<table class="table table-bordered">
  <thead>
  @if(isset($pres))
  {{$pres}}
    
@endif
    <tr>
      <th>Disease Name</th>
      <th>Medicine Info</th>
      <th>Checkup By</th>
      <th>Date</th>
      
    </tr>
  </thead>
  <tbody id="myTable">
  
    
    @if (isset($data))
    @foreach($data as $userData)
	  <tr>
		<td>{{$userData->Diseaseinfo}}</td>
    <td>{!! $userData->Medicine!!}</td>
    <td>{{$userData->DrName}}</td>
    <td>{{$userData->Date}}</td>

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