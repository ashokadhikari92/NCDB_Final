@extends('layouts.reports.master')

@section('content')

    <div class="col-md-10">
        <div class="content-box-large">
            <div class="panel-heading">
                @include('errors.error')
            </div>
        </div>
    </div>

@stop

@section('js_section')
    <script src="{{asset('assets/datatables/js/jquery.dataTables.min.js')}}"></script>
@stop