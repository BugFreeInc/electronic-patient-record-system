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
									 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>
									
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
									 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>
									
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
									 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>
									
								</div>
								
							</div>
						</div>
					</li>
				
			</ul>
		</div>
      </div>
      <div class="about" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Welcome to our Health Plus</h2>
			<p class="sub_t_agileits">Add Short Description</p>
			
			<p class="ab">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>

			 <div class="about-w3lsrow"> 
				
				<div class="col-md-6 w3about-img"> 
				    <img src="{{asset('frontEnd/images/about.jpg')}}" alt=" " class="img-responsive">
				</div> 
				<div class="col-md-6 col-sm-7 w3about-img two"> 
					<div class="w3about-text"> 
						<h5 class="w3l-subtitle">We Care About Your Health</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>
						  <div class="read"><a href="single.html" class="hvr-rectangle-in">Read More</a></div>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
<div class="stats" id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-building-o" aria-hidden="true"></i>
			<p class="counter">120</p>
			<h3>Hospital Rooms</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
		   <i class="fa fa-wheelchair" aria-hidden="true"></i>
			<p class="counter">165</p>
			<h3>Wheelchair</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
		<i class="fa fa-ambulance" aria-hidden="true"></i>
			<p class="counter">563</p>
			<h3>Ambulance Car</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
	<i class="fa fa-heart-o" aria-hidden="true"></i>
			<p class="counter">245</p>
			<h3>Saved Hearts</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>	
</div>

@endsection()
