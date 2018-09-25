@extends('pharmacy.masterPharma') 
@section('mainContent')

<section id="">

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <form class="navbar-form navbar-left" role="search" method="POST" action="{{url('/ShowPresPharma')}}">
      @csrf
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search By ID" name="nid">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<br><br>
@if(session('ck'))
{{session('ck') }}
@endif    </div>
    <div class="col-md-8">
      patient prescription history

    </div>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th>Disease</th>
      <th>Checkup By</th>
      <th>Date</th>
      <th>Medicine</th>
      
      
    </tr>
  </thead>
  <tbody id="myTable">

  @if (isset($data))
    @foreach($data as $userData)
	  <tr>
		<td>{{$userData->Diseaseinfo}}</td>
		<td>{{$userData->DrName}}</td>
    <td>{{$userData->Date}}</td>
    <td>{!! $userData->Medicine!!}</td>
		
		
	



	</tr>

@endforeach
@endif
    
  </tbody>
</table>
  </div>
  
</div>
  

</section>
@endsection()