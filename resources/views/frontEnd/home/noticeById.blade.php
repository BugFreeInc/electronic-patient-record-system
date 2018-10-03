@extends('frontEnd.master') 
@section('mainContent')
	<div class="banner-bottom" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Notice Bord</h2>
	 <table class="table table-bordered table-hover">
    <thead>
        <tr>
          
            <th><h3>{{$notice->noticeSubject }}</h3> <br><p>Created Date:{{ $notice->created_at }}</p></th>
        
          
         
     
        </tr>
    </thead>
    <tbody>
       
        <tr> 

            <td>{{ $notice->noticeMassage }}</td>
            
            
        </tr>
 
    </tbody>
</table>
			
	    </div>
	</div>
@endsection()
