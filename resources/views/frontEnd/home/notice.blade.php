@extends('frontEnd.master') 
@section('mainContent')
	<div class="banner-bottom" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Notice Bord</h2>
		    
<table class="table">
    <thead>
      <tr>
        <th>NOTICE ID</th>
        <th>NOTICE SUBJECT</th>
        <th>DATE</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      @foreach($notices as $noticelist)
     
      <tr class="active">
        <td>{{ $noticelist->id }}</td>
        <td>{{ $noticelist->noticeSubject }}</td>
        <td>{{ $noticelist->created_at }}</td>
        <td>
        	 <a href="{{ url('/notice/view/'.$noticelist->id) }}" class="btn btn-info" title="Notice View">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </a>
        </td>
      
      </tr>
      @endforeach
    </tbody>
  </table> 
			
	    </div>
	</div>
@endsection()
