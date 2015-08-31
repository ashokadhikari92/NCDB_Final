<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Dashboard</title>
<!-- Javascript for Subscribe for Chat App -->
<script src="http://autobahn.s3.amazonaws.com/js/autobahn.min.js"></script>


<!--  Load CSS Files -->

<link rel="stylesheet"
	href="{{ asset('assets/bootstrap-3.1.1-dist/css/bootstrap.min.css') }}" />
<link rel="stylesheet"
	href="{{ asset('assets/DataTables-1.10.0/css/jquery.dataTables_themeroller.min.css') }}" />
<link rel="stylesheet"
	href="{{ asset('assets/DataTables-1.10.0/css/jquery.dataTables.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/is/css/chat.css') }}" />
<link rel="stylesheet" href="{{ asset(ncdb_style.css) }}" />

<!-- Initialize base_url for js file for Ajax Calls -->

<script>
            var base_url = "{{URL::to('/')}}";			
        </script>
<meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body>
	
    <div id="userId" style="display: none;" data-id="{{$user->id}}">{{$user->id}}</div>

	<div class="container">

        <!-- Dashboard Navigation-->
        @include('navigation.dashboard_navbar')

		<!-- Image Menu: Start of Dashboard -->
		<div class="sub-container" id="sub-container">

		<div class="col-md-4 Dashboard ">

            <!-- Dashboard Image Menu -->
            @include('navigation.dashboard_image_menu')

            <!-- Dashboard PopUp model -->
            @include('...layouts1.popup_model')
            <!-- End of col-md-12 popup-->

            <!-- Dashboard forum -->
            @include('forum.dashboard_forum')
            <!-- End of col-md-12 forum -->

		</div>
        <!-- End of Col Dashboard -->



		<!-- Start of NewsBoard -->
		<div class="col-md-8 newsboard ">

            <!-- Sidebar1 Starts : News , Todos -->
			<div class="col-md-4 Sidebar1">

                <!-- Dashboard News -->
				@include('news.dashboard_news')
				<!--end of panelnews-->

				<!-- Dashboard Todo -->
                @include('todos.dashboard_todo')
				<!--end of paneltodo-->
			</div>
			<!--end of sidebar1-->

            <!-- Start of Sidebar2 : Quotes , Members list , Chat list -->
			<div class="col-md-8 sidebar2">
				<!--start of sidebar2-->
				<div class="row">

					<div class="col-sm-12">

						<div class="col-sm-6 notificationbar">

                            <!-- Starting NewsFeed Panel -->
                            @include('newsfeed.dashboard_newsfeed')
                            <!-- End of NewsFeed Panel -->

						</div>
						<!--end of col-sm-6 Notificationbar-->

						<div class="col-sm-6">
                            <!-- Start Quote Panel -->
							@include('quotes.dashboard_quote')
							<!--end of Quote Panel -->

                            <!--Start Active Member List -->
                            @include('users.active_member_list')
							<!--/span-->

							<!-- Starting of Chat Container -->
							@include('/chat/chat_list')
							<!-- End of Chat Container -->

						</div>
						<!--end of col-sm-6-->
					</div>
					<!--end of col-sm-12-->

				</div>
				<!-- End of row -->
				
			</div>
			<!-- End of col-md-8 sidebar2 -->			
			
		</div>
		<!-- End of col-md-8 newsboard -->
		
		</div><!--end of sub-container -->

	    <div id="chatbox_container"></div> <!-- End of chatbox_container -->
	</div>
	<!-- End of container -->
	<!-- Footer -->

	<div class="panel-footer footer ">
		<strong><span class="glyphicon glyphicon-copyright-mark"></span>
			Integrated Solutions Pvt. Ltd. 2014</strong>
	</div>
	<!--end of Footer-->


	<!--  Libraries Used  -->

	<script
		src="{{ asset('assets/jquery-1.11.1-dev/jquery-1.11.1.min.js') }}"></script>
	<script
		src="{{ asset('assets/DataTables-1.10.0/js/jquery.dataTables.min.js') }}"></script>
	<script
		src="{{ asset('assets/jquery-form-validator/jquery.form-validator.min.js') }}"></script>

    <script
        src="{{ asset('assets/is/js/bootstrap-datepicker.js') }}"></script>




	<!--<script src="{{ asset('assets/is/js/main/jquery.tap-events.min.js') }}"></script>

	<script src="{{ asset('assets/Touchable-jQuery-Plugin-master') }}"></script>-->

	<script
		src="{{ asset('assets/bootstrap-3.1.1-dist/js/bootstrap.min.js') }}"></script>

	<!-- Additional JS -->
	<script src="{{ asset('assets/is/js/chat/chat.js') }}"></script>
	<script src="{{ asset('assets/is/js/main/main.js') }}"></script>
	<script src="{{ asset('assets/is/js/emails/emails.js') }}"></script>
    <script src="{{asset('assets/is/js/newsfeed/newsfeeds.js')}}"></script>
    <script src="{{asset('assets/is/js/forum/forum.js')}}"></script>
    <script src="{{asset('assets/is/js/news/script.js')}}"></script>
    <script src="{{asset('assets/is/js/todos/scripts.js')}}"></script>

</body>
</html>
