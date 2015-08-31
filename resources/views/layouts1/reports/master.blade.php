<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}">

    <link href="{{asset('assets/css/DT_bootstrap.css')}}" rel="stylesheet">
    {{--<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">--}}
    <script src="{{asset('assets/js/jquery-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/DT_bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/angular.min.js')}}"></script>
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/DataTables-1.10.0/css/jquery.dataTables_themeroller.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/DataTables-1.10.0/css/jquery.dataTables.min.css') }}" />
    <script src="{{ asset('assets/DataTables-1.10.0/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>
    <script src="{{ asset('assets/js/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/d3.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#datatable-table').dataTable();
            $( ".datepicker" ).datepicker();
            $('#tabs').tab();
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <script>
        //base url for javascript ajax calls
        var base_url = "{!!URL::to('/')!!}";
    </script>
    <title></title>

</head>
<body>

@include('layouts1.header')

<div class="page-content ">
    <div class="row ">
        <div class="col-md-2">
            @include('layouts1.reports.sideMenu')
        </div>

        <div class="col-md-10 margin-fixed-top">
            @yield('content')
        </div>


    </div>
</div>
@include('layouts1.footer')
@yield('js_section')

</body>
</html>