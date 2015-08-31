@extends('layouts1.master')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nepali.datepicker.css')}}">
@stop
@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Parent</a>
        </li>
        <li><a href="#">Add</a></li>
    </ul>

    <div class="panel panel-default">
        @include('errors.error')
    </div>

    <div class="content-box-large">
        {!! Form::open(['route'=>'parents.store'])!!}
        @include('birthRegistration.parents.form',[$districts])

        <div class="col-lg-12">
            <input type="submit" value="Save" class="btn-success">
            <button class="btn-danger">Cancel</button>
        </div>

    </div>

@stop

@section('js_section')
    <script src="{{ asset('assets/ncdb/js/birth/create.js') }}"></script>
    <script src="{{asset('assets/js/responsive-tabs.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/js/nepali.datepicker.min.js')}}"></script>

    <script type="text/javascript">
        $( ".datepicker" ).datepicker();
        $( ".nepali-calendar" ).nepaliDatePicker();
    </script>
@stop