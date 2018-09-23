<div class="header-bottom">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('frontEnd/images/logo.png')}}" alt="Medicinal"></a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="{{url('/')}}" class="menu__link"> Home </a></li>
						<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="{{ url('/about') }}" class="menu__link"> About Us </a> </li>		
					
						<li class="m_nav_item menu__item" id="moble_nav_item_3 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">Log In  <b class="caret"></b></a> 
						   <ul class="dropdown-menu agile_short_dropdown">
									<li><a href="{{url('/adminLogin')}}">Admin</a></li>
									<li><a href="{{url('/doctorLogin')}}">Doctor</a></li>
									<li><a href="{{url('/pharmacyLogin')}}">Pharmacy</a></li>
									<li><a href="{{url('/patientLogin')}}">Patient</a></li>
								</ul>
						</li>
					
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="{{url('/contact')}}" class="menu__link"> Contact </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="{{ url('/notice') }}" class="menu__link"> Notice </a> </li>
					</ul>
				</nav>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
	 </div>