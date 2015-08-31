@extends('layouts1.master')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/jquery.sliderTabs.min.css')}}">
@stop
@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Vaccination</a>
        </li>
        <li><a href="#">Personal Detail</a></li>
    </ul>

    <div class="panel panel-default">
      @include('errors.error')
 </div>
    <div class="col-lg-12">
        <legend class="list-inline">Vaccination Program</legend>
    </div>
    <input type="hidden" value="1" id="child_id">
    <div class="col-lg-12">
       <h4 class="list-inline"> <label >Full Name : {{$child->brth_first_name}}{{" ".$child->brth_last_name}}</label></h4>
    </div>
    <div class="col-lg-6">
         <h4 class="list-inline"> <label>Date of Birth : {!! $child->brth_birth_date_bs!!} B.S.</label></h4>
    </div>
    <div class="col-lg-6">
         <h4 class="list-inline"><label>Age : {!! $child->age!!}</label></h4>
    </div>
    <div class="col-lg-6">
         <h4 class="list-inline"><label>Gender : {!! $child->brth_gender!!}</label></h4>
    </div>
    <div class="col-lg-6">
         <h4 class="list-inline"><label>Handicap : {!! $child->brth_handicap_type!!}</label></h4>
    </div>
    <div class="col-lg-12">
        <h3 class="list-inline"><u>Address</u></h3>
    </div>
    <div class="col-lg-6">
         <h4 class="list-inline"><label>Zone : {{$address['zone']}}</label></h4>
    </div>
    <div class="col-lg-6">
         <h4 class="list-inline"><label>District : {{$address['district']}}</label></h4>
    </div>
    <div class="col-lg-6">
         <h4 class="list-inline"><label>VDC/Municipality : {{$address['vdc']}}</label></h4>
    </div>
    <div class="col-lg-6">
         <h4 class="list-inline"><label>Ward No : {{$address['ward_no']}}</label></h4>
    </div>

    <div class="col-lg-12">
       {{--<a href="{!!route('vaccination/program/vaccine/list')!!}" ><button class="btn btn-warning">Vaccine List</button></a>--}}{{--
        <h4 class="list-inline"><button class="btn btn-warning" id="vaccine_list">Vaccine List</button></h4>--}}
        <h4 class="list-inline">{!! link_to_route('vaccination.program.show','Available Vaccine List', array($child->brth_registration_id), array('class' => 'btn btn-warning'))!!}</h4>
    </div>


@stop

@section('js_section')
     <script src="{{ asset('assets/ncdb/js/child_vaccine/vaccine_program.js') }}"></script>
     <script> $(function () { $('#myModal').modal({ keyboard: true })}); </script>
@stop