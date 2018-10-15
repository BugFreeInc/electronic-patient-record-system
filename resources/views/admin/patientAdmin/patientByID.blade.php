@extends('admin.masterAdmin')
@section('maincontent')
<div class="container text-center">

<h3>Patient Details Page</h3>
<hr/>
<table class="table table-bordered table-hover">
    <tr>
        <th>Patient Name</th>
        <th>{{ $patientId->name }}</th>
    </tr>
    
    <tr>
        <th>Govt. Natinal ID</th>
        <th>{{ $patientId->nid }}</th>
    </tr>
    <tr>
        <th>Email</th>
        <th>{{ $patientId->email }}</th>
    </tr>
   
    
    
</table>

 </div>



@endsection()