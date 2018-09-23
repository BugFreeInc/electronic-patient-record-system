@extends('pharmacy.masterPharma') 
@section('mainContent')

<section id="slidebar" class="text-center">
	<div class="container">
		<h3>Sell Record</h3>
	<div class="row">

		<div class="col-md-12">

 


<input type="text" id="myInput"  placeholder="Search for names.."  class="form-control">

<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody id="myTable">
  
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$172,750</td>
    </tr>
   
    <tr>
      <td>Mary</td>
      <td>Moe</td>
      <td>mary@mail.com</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
    </tr>
    <tr>
      <td>July</td>
      <td>Dooley</td>
      <td>july@greatstuff.com</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
    </tr>
    <tr>
      <td>Anja</td>
      <td>Ravendale</td>
      <td>a_r@test.com</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
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