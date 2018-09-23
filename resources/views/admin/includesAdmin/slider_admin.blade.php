<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('admin/img/adminlogo.png')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a href="{{ url('/adminHome') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user-md"></i>
              <span>Doctor</span>
              </a>
            <ul class="sub">
              <li><a href="{{ url('/addDoctor') }}">Add Doctor</a></li>
              <li><a href="{{ url('/doctorList') }}">Doctor List</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-medkit"></i>

              <span>Pharmacy</span>
              </a>
            <ul class="sub">
              <li><a href="{{ url('/addPharmacy') }}">Add Pharmacy</a></li>
              <li><a href="{{ url('/pharmacyList') }}">Pharmacy List</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-wheelchair"></i>
              <span>Patient</span>
              </a>
            <ul class="sub">
              <li><a href="login.html">List Patient</a></li>
              
            </ul>
          </li>
        
         
          <li>
            <a class="active" href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">30</span>
              </a>
          </li>
         
         
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>