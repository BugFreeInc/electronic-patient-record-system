@extends('frontEnd.master') 
@section('mainContent')
	<div class="banner-bottom" id="about">
		<div class="container">
		   @if(session('quary'))
           <p class="alert alert-danger">{{session('quary')}}</p>
           @endif
			<h2 class="w3_heade_tittle_agile">Contact Us If Any Query</h2>
		    <p class="sub_t_agileits">Get in touch...</p>

       
			<div class="contact-form-aits">
				 <form action="{{url('/saveQuary')}}" method="post">
				 @csrf
					<input type="text" class="margin-right" name="name" placeholder="Your Name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" class="margin-right" name="mobile" placeholder="Phone Number" required="">
					<input type="text" name="subject" placeholder="Subject" required="">
					<textarea name="massage" placeholder="Your Quary" required=""></textarea>
					<div class="send-button agileits w3layouts">
						<button class="btn btn-primary">SEND QUERY</button>
					</div>
				  </form>
				
			   </div>
	    </div>
	</div>
@endsection()
