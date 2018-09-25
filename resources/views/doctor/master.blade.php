<!DOCTYPE html>
<html>
<head>
<script src="{{asset('doctor/j.js')}}"></script>

<link rel="stylesheet" type="text/css" href="{{asset('doctor/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('doctor/css/style.css')}}">

</head>
<body>

@include('doctor.includes.header')
@include('doctor.includes.doctorInfo')

@yield('mainContent')

<!-- footer -->

 @include('doctor.includes.footer') 

 


<script src="{{asset('doctor/js/jquery.js')}}"></script>
<script src="{{asset('doctor/js/bootstrap.min.js')}}"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<script>
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="Medname' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="Dogeperday' + counter + '"/></td>';
        
        cols += '<td><select class="form-control" name="select' + counter + '"><option value="Before Eat">Before Eat</option><option value="After Eat">After Eat</option></select></td>';
        cols += '<td><input type="text" class="form-control" name="duration' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.table-bordered").append(newRow);
        counter++;
    });



    $("table.table-bordered").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.table-bordered").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
</script>
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
</body>
</html>