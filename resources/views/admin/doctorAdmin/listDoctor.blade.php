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
  
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      
      <td>
                <a href="" class="btn btn-info" title="Product View">
                    <span class="glyphicon glyphicon-info-sign"></span>
                </a>
                
                <a href="" title="Product Delete" class="btn btn-danger ">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td> 
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      
    </tr>
   
    <tr>
      <td>Mary</td>
      <td>Moe</td>
      <td>mary@mail.com</td>
      <td>63</td>
    
    </tr>
    <tr>
      <td>July</td>
      <td>Dooley</td>
      <td>july@greatstuff.com</td>
      <td>63</td>
      
    </tr>
    <tr>
      <td>Anja</td>
      <td>Ravendale</td>
      <td>a_r@test.com</td>
      <td>63</td>
    
    </tr>
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