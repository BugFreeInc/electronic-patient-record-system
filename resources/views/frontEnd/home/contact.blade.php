@extends('frontEnd.master') 
@section('mainContent')
	<div class="banner-bottom" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Contact Us</h2>
		    <p class="sub_t_agileits">Get in touch...</p>

           <div class="contact-top-agileits">
               <div class="col-md-4 contact-grid ">
					<div class="contact-grid1 agileits-w3layouts">
						<i class="fa fa-location-arrow"></i>
						<div class="con-w3l-info">
						   <h4>Address </h4>
						  <p>12K Street<span>New York City.</span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid2 w3">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<div class="con-w3l-info">
						  <h4>Call Us</h4>
						   <p>+1234 567 890<span>+1234 567 890</span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid3 w3l">
						<i class="fa fa-envelope"></i>
						<div class="con-w3l-info">
						  <h4>Email</h4>
						  <p><a href="mailto:info@example.com">info@example1.com</a>
						 
						  </p></div>
						  <div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				
			</div>
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
				  <ul class="agileits_social_list two">
				        <li class="fallow"> Follow Us :</li>
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
				         
			   </div>
	    </div>
	</div>
@endsection()
