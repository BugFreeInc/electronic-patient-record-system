@extends('doctor.master') 
@section('mainContent')
<section id="table">

<div class="container ">
    <table id="myTable" class=" table table-bordered">
      
    <th colspan="2"><input type="text" name="nid" class="form-control"  placeholder="Patient ID" required></th>
    <th colspan="3"><input type="text" name="Disease_info" class="form-control"  placeholder="Disease Info" required></th></tr>
    
        <tr>
            <td class="col-sm-4">Medicin Name</td>
            <td class="col-sm-2">Doge Per Day</td>
            <td class="col-sm-2">Condition</td>
    
            <td class="col-sm-2">Duration Day</td>
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
                <select class="form-control" name="select">
                <option value="volvo">Before Eat</option>
                <option value="saab">After Eat</option>
                </select>
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

</section>
@endsection()