<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NCDB</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	{{-- <link rel="stylesheet" href="{{ asset('assets/css/ncdb_style.css') }}" />--}}

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	{{--<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>--}}
	<nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"
                 id="bs-example-navbar-collapse-1">
                {{--<ul class="nav navbar-nav">
                                         <li class="inactive menulist"><a href="#"><span
                                                     class="glyphicon glyphicon-th-large glyphnavmenu" title="Dashboard"></span> </a></li>
                                         <li class="inactive menulist"><a href="#"><span
                                                     class="glyphicon glyphicon-home glyphnavmenu" title="Home"></span></a></li>
                                         <li class="inactive menulist"><a href="#"><span
                                                     class="glyphicon glyphicon-folder-open glyphnavmenu" title="Reports"></span></a></li>
                                         <li class="inactive menulist"><a href="#"><span
                                                     class="glyphicon glyphicon-wrench glyphnavmenu" title="Configurations"></span></a></li>

                                     </ul>--}}
               {{-- <ul class="nav navbar-nav navbar-right">
                    --}}{{--<h5>Welcome {{ \Auth::user()->user_name  }}</h5>--}}{{--
                    <li class="dropdown">
                        <a class="dropdown-toggle"
                           data-toggle="dropdown" href="#">
                            --}}{{--<div class="label label-default ">--}}{{--
                                <i class="glyphicon glyphicon-user"></i>
                            --}}{{--</div>--}}{{--
                        </a>

                        <div class="panel-body bodynotification dropdown-menu dropdown-messages">
                            <div class="list-group">
                                <a href="{!! url('auth/logout') !!}" class="">
                                    Log Out
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle"
                           data-toggle="dropdown" href="#"> <i class="glyphicon glyphicon-bell"></i>
                        </a>
                        <!-- /.panel-heading -->
                        <div class="panel-body bodynotification dropdown-menu dropdown-messages">
                            <div class="list-group">
                                <a href="#" class="list-group-item"> <i
                                        class="fa fa-comment fa-fw"></i>Holiday<span
                                        class="pull-right text-muted small"><em>4 minutes ago</em> </span>
                                </a> <a href="#" class="list-group-item"> <i
                                        class="fa fa-twitter fa-fw"></i>Role Changed Notice<span
                                        class="pull-right text-muted small"><em>12 minutes ago</em> </span>
                                </a> <a href="#" class="list-group-item"> <i
                                        class="fa fa-envelope fa-fw"></i>Meeting<span
                                        class="pull-right text-muted small"><em>27 minutes ago</em> </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>

                    </li>


    --}}{{--
                    <li><a href="{!! url('auth/logout') !!}">
                            <button type="button" class="btnsidebar panel-body"
                                    title="Log Out">
                                <span class=" glyphicon glyphicon-log-out"></span>
                            </button></a>
                    </li>--}}{{--

                </ul>--}}
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--  end of navigation -->

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
