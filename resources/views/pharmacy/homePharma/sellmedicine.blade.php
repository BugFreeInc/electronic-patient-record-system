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
      <h3>Assing Medicine</h3>
      <table id="myTable" class=" table table-bordered">
      
    <th colspan="4"><input type="text" name="nid" class="form-control"  placeholder="Patient ID" required></th>
    
    
        <tr>
            <td class="col-sm-4">Medicin Name</td>
            <td class="col-sm-2">Quantity</td>
            <td class="col-sm-2">Price</td>
            <td class="col-sm-2">Action</td>

        
        </tr>
    
            <tr>
            <td class="col-sm-4">
                <input type="text" name="name" class="form-control" />
            </td>
            <td class="col-sm-2">
                <input type="text" name="perday"  class="form-control"/>
            </td>
            
             <td class="col-sm-2">
                <input type="number" name="duration"  class="form-control"/>
            </td>
            <td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>'

            </td>
        </tr>
   
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add New Madicin" />
            </td>

        </tr>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="submit" class="btn btn-lg btn-block " id="save" value="Save Info" />
            </td>
        </tr>
    </tfoot>
</table>
    </div>
    
  </div>
  
</div>
  

</section>

<script>
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="mail' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="phone' + counter + '"/></td>';
        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger " value="Delete"></td>';
        newRow.append(cols);
        $("table.table-bordered").append(newRow);
        counter++;
    });



    $("table.table-bordered").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
</script>
@endsection()