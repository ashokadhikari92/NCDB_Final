<!DOCTYPE html>
<html>
  <head>
    <title>NCDB Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-3.3.5-dist/css/bootstrap.min.css') }}" />
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />


  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">National Children Database</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

			                <input class="form-control" type="text" placeholder="E-mail address" name="email" value="{{ old('email') }}">
			                <input class="form-control" type="password" placeholder="Password" name="password">
			                <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                            <div class="checkbox pull-right">
                                <a href="{{ url('/password/email') }}">Forgot password?</a>
                            </div>


			                <div class="action">
			                    <button type="submit" class="btn btn-primary signup">Login</button>
			                   {{-- <a class="btn btn-primary signup" href="index.html">Login</a>--}}
			                </div>
			                 </form>
			            </div>

			        </div>

			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{--<script src="https://code.jquery.com/jquery.js"></script>--}}
    <script src="{{ asset('assets/jquery-1.11.1-dev/jquery-1.11.1.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   {{-- <script src="bootstrap/js/bootstrap.min.js"></script>--}}
    <script src="{{ asset('assets/bootstrap-3.3.5-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/login.js') }}"></script>
  </body>
</html>