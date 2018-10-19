@extends('admin.masterAdmin')
@section('maincontent')
<div class="container text-center">

<h3>Pharmacy Details Page</h3>
<hr/>
<table class="table table-bordered table-hover">
    <tr>
        <th>Pharmacy Name</th>
        <th>{{ $pharmaId->PharmacyName }}</th>
    </tr>
    
    <tr>
        <th>Govt. Registration ID</th>
        <th>{{ $pharmaId->RegID }}</th>
    </tr>
    <tr>
        <th>Owners Name</th>
        <th>{{ $pharmaId->OwnerName }}</th>
    </tr>
    <tr>
        <th>Email</th>
        <th>{{ $pharmaId->email }}</th>
    </tr>
    
    
</table>

 </div>



@endsection()