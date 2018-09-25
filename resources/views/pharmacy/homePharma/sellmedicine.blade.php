@extends('pharmacy.masterPharma') 
@section('mainContent')
<section id="">

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <form class="navbar-form navbar-left" role="search by NID" action="{{url('/ShowMed')}}" method="POST" >
      @csrf
  <div class="form-group">
    <input type="text" class="form-control" name="nid" placeholder="Search" required>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<br><br>
<table class="table">
  <thead>
    <tr>
      
      <th>Medicine</th>
      
      
    </tr>
  </thead>
  <tbody id="myTable">

  @if (isset($data))
    @foreach($data as $userData)
	  <tr>
		
    <td>{!! $userData->Medicine!!}</td>

	</tr>

@endforeach
@endif
    
  </tbody>
</table>
    </div>
    <div class="col-md-8">
    
      <h3>Assing Medicine</h3>
      @if(session('sell'))
      {{session('sell')}}
      @endif
      <form action="{{url('/SellMed')}}" method="POST">
      @csrf
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
                <input type="text" name="MedicineName" class="form-control" required/>
            </td>
            <td class="col-sm-2">
                <input type="text" name="Quantity"  class="form-control" required/>
            </td>
            
             <td class="col-sm-2">
                <input type="number" name="Price"  class="form-control" required/>
            </td>
            <td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>

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
</form>
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

        cols += '<td><input type="text" class="form-control" name="MedicineName' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="Quantity' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="Price' + counter + '"/></td>';
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