@extends('frontEnd.master') 
@section('mainContent')
	<div class="banner-bottom" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Contact Us If Any Query</h2>
		    <p class="sub_t_agileits">Get in touch...</p>

       
			<div class="contact-form-aits">
				 <form action="#" method="post">
					<input type="text" class="margin-right" name="Name" placeholder="Name" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="text" class="margin-right" name="Phone Number" placeholder="Phone Number" required="">
					<input type="text" name="Subject" placeholder="Subject" required="">
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<div class="send-button agileits w3layouts">
						<button class="btn btn-primary">SEND MESSAGE</button>
					</div>
				  </form>
				
			   </div>
	    </div>
	</div>
@endsection()
