  	<div class="header" >
	     <div class="container-fluid">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo col-md-12">
	                   <div class="ncdb-logo-img col-md-4">
	                      <img src="{{asset('assets/img/logo/nepal.png')}}" >
	                   </div>
                       <div class="heading-title col-md-4">
                          <h5 class="text-center">Government of Nepal</h5>
                          <h5 class="head-title text-center">Kathmandu Municipality</h5>
                          <h5 class="ward-office text-center">Ward Office 19</h5>
                       </div>
                       <div class="col-md-4">
                            <ul class="nav navbar-nav pull-right header-icon-item">
                               {{-- <li class="inactive menulist"><a href="#"><span
                                            class="glyphicon glyphicon-th-large glyphnavmenu" title="Dashboard"></span> </a></li>--}}
                                <li class="inactive menulist"><a href="{!!url('home') !!}"><span
                                            class="glyphicon glyphicon-home glyphnavmenu" title="Home"></span></a></li>
                                <li class="inactive menulist"><a href="{!! url('reports') !!}"><span
                                            class="glyphicon glyphicon-folder-open glyphnavmenu" title="Reports"></span></a></li>
                                <li class="inactive menulist"><a href="{{url('configure')}}"><span
                                            class="glyphicon glyphicon-wrench glyphnavmenu" title="Configurations"></span></a></li>
                            </ul>
                            <div class="clearfix"></div>
                            <ul class="nav navbar-nav pull-right header-icon-item border-for-all">
                               <li class="dropdown">
                                   <a href="#" class="dropdown-toggle white-color" data-toggle="dropdown">{{\Auth::User()->user_name}}<b class="caret"></b></a>
                                   <ul class="dropdown-menu animated fadeInUp">
                                       <li><a href="#">Profile</a></li>
                                       <li><a href="{!! url('auth/logout') !!}">Logout</a></li>
                                   </ul>
                               </li>
                            </ul>
                       </div>
	              </div>
	           </div>
	           {{--<div class="col-md-5">
                         	              <div class="row">
                         	                <div class="col-lg-12">
                         	                  <div class="input-group form">
                         	                       <input type="text" class="form-control" placeholder="Search...">
                         	                       <span class="input-group-btn">
                         	                         <button class="btn btn-primary" type="button">Search</button>
                         	                       </span>
                         	                  </div>
                         	                </div>
                         	              </div>
                         	           </div>--}}
	          {{-- <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>--}}
	        </div>
	     </div>
	</div>