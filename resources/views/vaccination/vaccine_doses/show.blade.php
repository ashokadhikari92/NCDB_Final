@extends('layouts1.master')
@section('css')

@stop
@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Vaccine</a>
        </li>
        <li><a href="#">View Dose Interval</a></li>
    </ul>

    <div class="panel panel-default">
        @include('errors.error')
    </div>
    <div class="col-lg-12">
        <legend class="list-inline">Vaccine Dose Interval(s)</legend>
    </div>

    @foreach($vaccine_doses as $interval)
        <div class="col-lg-12">
            <h4 class="list-inline"> <label >Dose No: {{$interval->dose_vaccine_dose_no}} </label></h4>
        </div>
        <div class="col-lg-12">
            <h4 class="list-inline"> <label>Interval : {{$interval->years}} year(s){{" ".$interval->months}}Month(s){{" ".$interval->days}}Days</label></h4>
        </div>
    @endforeach

        <div class="col-lg-12">

            <h4 class="list-inline">{!! link_to_route('vaccines.index','Back', array('class' => 'btn btn-warning'))!!}</h4>
        </div>


@stop

@section('js_section')
    <script src="{{ asset('assets/ncdb/js/child_vaccine/vaccine_program.js') }}"></script>

@stop