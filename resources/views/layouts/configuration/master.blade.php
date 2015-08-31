<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ADMIN</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap-3.3.5-dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/DataTables-1.10.0/css/jquery.dataTables_themeroller.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/DataTables-1.10.0/css/jquery.dataTables.min.css') }}" />

   <style>
       .overflow-control{
           overflow: scroll;
       }
   </style>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('assets/css/ncdb_style.css') }}" />

<script>
//base url for javascript ajax calls
var base_url = "{!!URL::to('/')!!}";
</script>          


</head>
<body>

		<!-- navigation start -->
    <div class="row">
        @include('layouts.navbar')
    </div>

		<!--  end of navigation -->
        <div class="container-fluid">
<!-- column 1 start-->
<!-- accordian start-->

    <div class="row">
       <div class="col-lg-2 col-md-3">
       {{-- @include('layouts.left_menu')--}}
        @include('layouts.configuration.sideMenu')
       </div>
<!-- accordion end -->
<!-- column 1 end-->
			
			
			<!-- - Column 2 start -->

			<!--<div class="col-lg-12 maingrid maincontent"></div>-->
            <div class="col-lg-10  col-md-9">
                @yield('content')
            </div>
			<!-- End of Column2 -->
            </div>

         </div> <!--end 0f contriner-fluid-->
			<!-- Footer -->
			<div id="footer" class="pull-down navbar-fixed-bottom">
				<!--<div class="container credit"></div>-->
				<div class="container my_footer">

					<p class="text-center">
						<strong><span class="glyphicon glyphicon-copyright-mark"></span>
							Ashok & Co. Group 2015</strong>

					</p>
				</div>
				<!-- end of Footer -->
			</div>




	<script src="{{ asset('assets/jquery-1.11.1-dev/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('assets/DataTables-1.10.0/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/jquery-form-validator/jquery.form-validator.min.js') }}"></script>
	<script src="{{ asset('assets/bootstrap-3.3.5-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootbox/bootbox.min.js') }}"></script>
    {{--<script src="{{ asset('assets/js/main.js') }}"></script>--}}

	@yield('js_section')

</body>
</html>