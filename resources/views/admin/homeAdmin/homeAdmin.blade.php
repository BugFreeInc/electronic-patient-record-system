@extends('admin.masterAdmin')
@section('maincontent')
<section id="home" >

	<div class="container">
		<h3>
			Welcome As A Admin
		</h3>
		
	</div>
	 <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>Doctor</h5>
                  </div>
                  <canvas id="serverstatus01" height="100" width="100"></canvas>
                     <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-user-md" aria-hidden="true"></i>
			<p class="counter">120</p>
			<h3>Doctor</h3>
		</div>
                  
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- /col-md-4-->
              <div class="col-md-4 col-sm-4 mb ">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Pharmacy</h5>
                  </div>
                  <canvas id="serverstatus02" height="100" width="100"></canvas>
                  <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-medkit" aria-hidden="true"></i>
			<p class="counter">120</p>
			<h3>Pharmacy</h3>
		</div>
                  
                  
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Patient</h5>
                  </div>
                  <canvas id="serverstatus01" height="100" width="100"></canvas>
                     <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-wheelchair" aria-hidden="true"></i>
			<p class="counter">120</p>
			<h3>Patient</h3>
		</div>
                  <div class="row">
                    
                   
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              
              </div>
              <!-- /col-md-4 -->
            </div>
          
<link href="{{asset('frontEnd/images/logo.png')}}" rel="icon">
<link href="{{asset('frontEnd/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('frontEnd/css/flexslider.css')}}" type="text/css" media="screen" Department="" />
<link href="{{asset('frontEnd/css/services.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontEnd/css/ziehharmonika.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontEnd/css/JiSlider.css')}}" rel="stylesheet"> 
<link href="{{asset('frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="{{asset('frontEnd/css/font-awesome.css')}}" rel="stylesheet"> 
<script src="{{asset('frontEnd/js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('frontEnd/js/JiSlider.js')}}"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script src="{{asset('frontEnd/js/ziehharmonika.js')}}"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: ''
		});
	});
</script>
<!-- stats -->
	<script src="{{asset('frontEnd/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('frontEnd/js/jquery.countup.js')}}"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<script type="text/javascript">
$(function(){
  $("#bars li .bar").each(function(key, bar){
    var percentage = $(this).data('percentage');

    $(this).animate({
      'height':percentage+'%'
    }, 1000);
  })
})
</script>
</section>
@endsection()