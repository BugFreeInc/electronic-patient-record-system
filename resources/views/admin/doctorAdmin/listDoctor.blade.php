@extends('admin.masterAdmin')
@section('maincontent')

<section id="slidebar" class="text-center">
	<div class="container">
		<h3>Doctor List</h3>
	<div class="row">

		<div class="col-md-12">

 


<input type="text" id="myInput"  placeholder="Search for names.."  class="form-control">

<br>
<table class="table table-bordered" >
  <thead class="text-center">
    <tr>
      <th>Reg. No:</th>
      <th>Dr. Name</th>
      <th> Dr. Email</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
  @foreach($doctor_list as $drList)
    <tr>
      <td>{{ $drList->RegID }}</td>
      <td>{{ $drList->name }}</td>
      <td>{{ $drList->email }}</td>
      
      <td>
                <a href="" class="btn btn-info" title="Product View">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                
                <a href="" title="Product Delete" class="btn btn-danger ">
                    <span class="glyphicon glyphicon-trash"></span>
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