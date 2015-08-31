@extends('layouts1.master')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nepali.datepicker.css')}}">
@stop
@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Birth Registration</a>
        </li>
        <li><a href="#">Edit</a></li>
    </ul>

    <div class="panel panel-default">
      @include('errors.error')
 </div>

 <div class="content-box-large">


     {!! Form::model($child,['method'=>'PATCH','route'=>['birth_details.update',$child->brth_id]]) !!}

                <div class="col-lg-12">
                    <legend class="header">Edit Child Details</legend>
                </div>
                <input type="hidden" id="child_id" value="{{$child->brth_id}}">

                <div class="form-group col-lg-6">
                    {!! Form::label('brth_first_name','First Name') !!}
                    {!! Form::text('brth_first_name',null,array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-6">
                     {!! Form::label('brth_last_name','Last Name') !!}
                     {!! Form::text('brth_last_name',null,array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-12">
                     {!! Form::label('brth_full_name','Full Name') !!}
                    <font face="Nepali">{!! Form::text('brth_full_name_nepali',null,array('class'=>'form-control','placeholder'=>'नेपालीमा')) !!}</font>
                </div>
                <div class="form-group col-lg-6">
                     {!! Form::label('brth_birth_dat_bs','Date of Birth (B.S.)') !!}
                     {!! Form::text('brth_birth_date_bs',null,array('class'=>'form-control nepali-calendar','id'=>'date_bs')) !!}
                </div>
                <div class="form-group col-lg-6">
                     {!! Form::label('brth_birth_date_ad','Date of Birth(A.D.)') !!}
                     {!! Form::text('brth_birth_date_ad',null,array('class'=>'form-control datepicker','id'=>'date_ad')) !!}
                </div>
                <div class="form-group col-lg-6">
                     {!! Form::label('brth_birth_place','Birth Place') !!}
                    {{-- {!! Form::text('brth_first_name',null,array('class'=>'form-control')) !!}--}}
                      <select class="form-control" name="brth_birth_place" id="birth_place">
                        <option>Choose Birth Place</option>
                      </select>
                </div>
                <div class="form-group col-lg-6">
                     {!! Form::label('brth_birth_helper','Birth Helper') !!}
                     {{--{!! Form::text('brth_birth_helper',null,array('class'=>'form-control')) !!}--}}
                      <select class="form-control" name="brth_birth_helper" id="birth_helper">
                       <option>Choose Birth Helper</option>
                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_gender','Gender') !!}
                      {{--{!! Form::text('brth_gender',null,array('class'=>'form-control')) !!}--}}
                       <select class="form-control" name="brth_gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                       </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_caste','Caste') !!}
                      {{--{!! Form::text('brth_caste',null,array('class'=>'form-control')) !!}--}}
                       <select class="form-control" name="brth_caste" id="caste">
                            <option>Choose Caste</option>
                            <option value="Braman">Braman</option>
                            <option value="Newar">Newar</option>
                       </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_type','Birth Type') !!}
                      {{--{!! Form::text('brth_birth_type',null,array('class'=>'form-control')) !!}--}}
                       <select class="form-control" name="brth_birth_type">
                            <option value="Single">Single</option>
                            <option value="Twins">Twins</option>
                            <option value="Triplets">Triplets</option>
                       </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_handicap','Handicap') !!}
                      {{--{!! Form::text('brth_handicap',null,array('class'=>'form-control')) !!}--}}
                        <select class="form-control" name="brth_handicap" id="handicap">
                             <option value="None">None</option>
                             <option value="Vision Loss and Blindness">Vision Loss and Blindness</option>
                             <option value="Hearing Loss">Hearing Loss and Deafness</option>
                        </select>
                </div>


                <div class="col-lg-12">
                    <legend class="header">Birth Address</legend>
                </div>

                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_zone','Zone : ') !!}
                      <select class="form-control zone"  id="brth_zone">
                      <option>Choose A Zone</option>
                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_district','District : ') !!}
                      <select class="form-control district"  id="brth_district">

                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_vdc','VDC/Municipality: ') !!}
                      <select class="form-control vdc"  id="brth_vdc">

                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_ward_no','Ward No: ') !!}
                      <select class="form-control ward_no" name="brth_birth_address" id="brth_ward_no">

                      </select>
                </div>
                <div class="col-lg-12">
                    <h3>If Child was born in Foreign</h3>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_country_name','Country Name : ') !!}
                      <select class="form-control" name="brth_country_name" id="brth_country">
                      <option>Choose Country</option>
                      </select>
                </div>


               <div class="col-lg-12">
                {!!Form::submit('Update',['class'=>'btn btn-info']) !!}
                {!! Form::close() !!}
               {{-- <a href="{!!route('birth_details.index')!!}" ><button class="btn btn-warning">Cancel</button></a>--}}
                 {!! link_to_route('birth_details.show','Cancel', array($child->brth_id), array('class' => 'btn btn-warning'))!!}
                </div>

    </div>


 </div>


@stop

@section('js_section')
     <script src="{{ asset('assets/ncdb/js/birth/edit.js') }}"></script>
     <script src="{{asset('assets/js/responsive-tabs.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
     <script src="{{asset('assets/js/nepali.datepicker.min.js')}}"></script>

         <script type="text/javascript">
            $( ".datepicker" ).datepicker();
            $( ".nepali-calendar" ).nepaliDatePicker();
         </script>
@stop