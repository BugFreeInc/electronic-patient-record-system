@extends('admin.masterAdmin')
@section('maincontent')

<section id="slidebar" class="text-center">
	<div class="container">
		<h3>Pharmacy List</h3>
	<div class="row">

		<div class="col-md-12">

 


<input type="text" id="myInput"  placeholder="Search for names.."  class="form-control">

<br>
<table class="table table-bordered" >
  <thead class="text-center">
    <tr>
      <th>Patient NID</th>
      <th>Patient Name</th>
      <th>Patient Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
   @foreach($Patient_list as $patientList)
    <tr>
      <td>{{ $patientList->nid }}</td>
      <td>{{ $patientList->name }}</td>
      <td>{{ $patientList->email }}</td>
      
      <td>
                <a href="{{ url('patientDetails/'.$patientList->id) }}" class="btn btn-info" title="Patient Details View">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>
            </td> 
    </tr>
    @endforeach
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