@extends('frontEnd.master') 
@section('mainContent')
		<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

							<div class="container">
									<div class="agileits-banner-info">
									<span>Health Plus</span>
									<h3>Quality Care </h3>
									 <p>Doctor will checkup his patient and prescript the patient through our project(EPRS).</p>
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
								<div class="agileits-banner-info">
								 <span>Real</span>
									<h3>Free Consultation </h3>
									 <p>The record of patient will be enter according  to patient id card.</p>
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								     <span>Amazing</span>
									<h3>Quality Care </h3>
									 <p>When the patient want to buy medicine, the pharmacist will check patient record using his id number.</p>
									
								</div>
								
							</div>
						</div>
					</li>
				
			</ul>
		</div>
      </div>
     <div class="about" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Welcome to our EPRS</h2>
			<p class="sub_t_agileits">About Our Project</p>
			
			<p class="ab">Doctor will checkup his patient and prescript the patient through our project(EPRS). The record of patient will be enter according  to patient id card. When the patient want to buy medicine, the pharmacist will check patient record using his id number.  If the information is present in database patient can buy medicine. That’s how EPRS can stop misuse of medicine.  </p>

			 <div class="about-w3lsrow"> 
				
				<div class="col-md-6 w3about-img"> 
				    <img src="{{asset('frontEnd/images/about.jpg')}}" alt=" " class="img-responsive">
				</div> 
				<div class="col-md-6 col-sm-7 w3about-img two"> 
					<div class="w3about-text"> 
						
						<p>If the patient goes to other doctor, that doctor can check his previous record. As all data are in database , the cause of disease of patient or death of patient can identify from the data.Our country has163 million people but we don’t  single data warehouse for store medical information which can be useful in medical research .
</p>

						  
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
<div class="stats" id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids">
		<div class="col-md-4 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-user-md" aria-hidden="true"></i>
			<p class="counter">{{ session('DrCount') }}</p>
			<h3>Total Doctor</h3>
		</div>
		<div class="col-md-4 w3layouts_stats_left w3_counter_grid1">
		   <i class="fa fa-wheelchair" aria-hidden="true"></i>
			<p class="counter">{{ session('PaCount') }}</p>
			<h3>Patient</h3>
		</div>
		<div class="col-md-4 w3layouts_stats_left w3_counter_grid2">
		<i class="fa fa-medkit" aria-hidden="true"></i>
			<p class="counter">{{ session('PhCount') }}</p>
			<h3>Pharmacy</h3>
		</div>
		
		<div class="clearfix"> </div>
	</div>
   </div>	
</div>

@endsection()
