@extends('admin.masterAdmin')
@section('maincontent')
<div class="container text-center">

<h3>Doctor Details Page</h3>
<hr/>
<table class="table table-bordered table-hover">
    <tr>
        <th>Doctor Name</th>
        <th>{{ $drview->name }}</th>
    </tr>
    
    <tr>
        <th>Govt. Registration ID</th>
        <th>{{ $drview->RegID }}</th>
    </tr>
    <tr>
        <th>Qualification</th>
        <th>{{ $drview->Qualification }}</th>
    </tr>
    <tr>
        <th>Speacialist</th>
        <th>{{ $drview->Specialist }}</th>
    </tr>
    
    
</table>

 </div>



@endsection()