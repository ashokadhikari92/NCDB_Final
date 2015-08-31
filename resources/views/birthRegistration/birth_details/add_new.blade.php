@extends('layouts1.master')
@section('content')

    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Birth Registration</a>
        </li>
        <li><a href="#">Create</a></li>
    </ul>

    {!! Form::open(['route'=>'birth_details.store','class'=>'form-horizontal']) !!}

    <div class="col-md-12">
        <div class="col-md-5">
            <div class="form-group">
                {!! Form::label('brth_first_name','First Name :',['class'=>'control-label']) !!}
                {!! Form::text('brth_first_name',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
            <div class="form-group">
                {!! Form::label('brth_last_name','Last Name :',['class'=>'control-label']) !!}
                {!! Form::text('brth_last_name',null,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>


    <div class="col-md-12">
        <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('brth_full_name_nepali','Full Name :',['class'=>'control-label']) !!}
                {!! Form::text('brth_full_name_nepali',null,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>


    <div class="col-md-12  border-for-bottom">
        <div class="col-md-5">
            <div class="form-group">
                {!! Form::label('brth_birth_date_bs','Date of Birth(B.S.) :',['class'=>'control-label']) !!}
                {!! Form::text('brth_birth_date_bs',null,['class'=>'form-control nepali-calendar']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_birth_place','Birth Place :',['class'=>'control-label']) !!}
                {!! Form::select('brth_birth_place',$birthPlaces,null,['class'=>'form-control ']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_gender','Gender :',['class'=>'control-label']) !!}
                {!! Form::select('brth_gender',['Male'=>'Male','Female'=>'Female','Other'=>'Other'],null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_birth_type','Birth Type:',['class'=>'control-label']) !!}
                {!! Form::select('brth_birth_type',$birthTypes,null,['class'=>'form-control']) !!}
            </div>

        </div>
        <div class="col-md-5 col-md-offset-2">
            <div class="form-group">
                {!! Form::label('brth_birth_date_ad','Date of Birth(A.D.) :',['class'=>'control-label']) !!}
                {!! Form::text('brth_birth_date_ad',null,['class'=>'form-control datepicker']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_birth_healper','Birth Helper :',['class'=>'control-label']) !!}
                {!! Form::select('brth_birth_helper',$birthHelpers,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_caste','Caste :',['class'=>'control-label']) !!}
                {!! Form::select('brth_caste',$castes,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_handicap_type','Handicap:',['class'=>'control-label']) !!}
                {!! Form::select('brth_handicap_type',$handicapType,null,['class'=>'form-control']) !!}
            </div>

        </div>
    </div>


    <div class="col-md-12 border-for-bottom">
        <h4 class="text-center">Birth Address</h4>
        <div class="col-md-5">
            <div class="form-group">
                {!! Form::label('brth_birth_address','Zone:',['class'=>'control-label']) !!}
                {!! Form::select('brth_birth_address',[],null,['class'=>'form-control','id'=>'zone']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_birth_address','VDC:',['class'=>'control-label']) !!}
                {!! Form::select('brth_birth_address',[],null,['class'=>'form-control','id'=>'vdc']) !!}
            </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
            <div class="form-group">
                {!! Form::label('brth_birth_address','District:',['class'=>'control-label']) !!}
                {!! Form::select('brth_birth_address',[],null,['class'=>'form-control','id'=>'district']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_birth_address','Ward No :',['class'=>'control-label']) !!}
                {!! Form::select('brth_birth_address',[],null,['class'=>'form-control','id'=>'ward_no']) !!}
            </div>
        </div>
    </div>


    <div class="col-md-12 border-for-bottom">
        <div class="col-md-5">
            <div class="form-group">
                <h4>Is child Born in Foreign</h4>
                {!! Form::radio('brth_is_born_in_foreign', 'true',['class'=>'col-md-2']) !!} Yes
                {!! Form::radio('brth_is_born_in_foreign', 'false',['class'=>'col-md-offset-2']) !!} No
            </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
            <div class="form-group">
                {!! Form::label('brth_country_name','Country :',['class'=>'control-label']) !!}
                {!! Form::select('brth_country_name',$countries,null,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-12 ">
        <div class="col-md-5">
            <div class="form-group">
                {!! Form::label('brth_father','Father Citizenship :',['class'=>'control-label']) !!}
                {!! Form::text('brth_father',null,['class'=>'form-control ']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_grand_father','Grand Father :',['class'=>'control-label']) !!}
                {!! Form::text('brth_grand_father',null,['class'=>'form-control ']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_informed_by','Informer  :',['class'=>'control-label']) !!}
                {!! Form::text('brth_informed_by',null,['class'=>'form-control ']) !!}
            </div>
        </div>
        <div class="col-md-5 col-md-offset-2">
            <div class="form-group">
                {!! Form::label('brth_mother','Mother Citizenship :',['class'=>'control-label']) !!}
                {!! Form::text('brth_mother',null,['class'=>'form-control ']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brth_grand_mother','Grand Mother :',['class'=>'control-label']) !!}
                {!! Form::text('brth_grand_mother',null,['class'=>'form-control ']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-5">
            {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
            {!! Form::button('Cancel',['class'=>'btn btn-warning']) !!}
        </div>
    </div>


    {!! Form::close() !!}

@stop
@section('js_section')
    <script src="{{asset('assets/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/ncdb/js/birth/create.js') }}"></script>
    <script src="{{asset('assets/js/nepali.datepicker.min.js')}}"></script>
    <script type="text/javascript">
        $( ".nepali-calendar" ).nepaliDatePicker();
    </script>
@stop