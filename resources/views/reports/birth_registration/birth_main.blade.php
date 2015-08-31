@extends('layouts1.reports.master')
@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Report / Birth Registration</a>
        </li>
        <li><a href="#">Index</a></li>
    </ul>

    {!! Form::open() !!}

    <div class="col-md-4">

        <div class="form-group">
            {!! Form::label('from','From :',['class'=>'control-label']) !!}
            {!! Form::text('from',null,['class'=>'form-control datepicker child-filter']) !!}
        </div>

    </div>

    <div class="col-md-4 col-md-offset-4">
        <div class="form-group">
            {!! Form::label('to','To :',['class'=>'control-label']) !!}
            {!! Form::text('to',date('Y-m-d'),['class'=>'form-control datepicker child-filter']) !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('zone','Zone:',['class'=>'control-label']) !!}
            {!! Form::select('zone',[null =>'Choose  Zone'],null,['class'=>'form-control child-filter','id'=>'zone']) !!}
        </div>
    </div>

    <div class="col-md-4 ">
        <div class="form-group">
            {!! Form::label('district','District:',['class'=>'control-label']) !!}
            {!! Form::select('district',[null =>'Choose District'],null,['class'=>'form-control child-filter','id'=>'district']) !!}
        </div>
    </div>

    <div class="col-md-4 ">
        <div class="form-group">
            {!! Form::label('vdc','VDC:',['class'=>'control-label']) !!}
            {!! Form::select('vdc',[null =>'Choose VDC'],null,['class'=>'form-control child-filter','id'=>'vdc']) !!}
        </div>
    </div>

   {{-- <div class="col-md-3 ">
        <div class="form-group">
            {!! Form::label('ward_no','Ward No :',['class'=>'control-label']) !!}
            {!! Form::select('ward_no',['Choose Ward No'],null,['class'=>'form-control','id'=>'ward_no']) !!}
        </div>
    </div>--}}


    {!! Form::close() !!}

    <div class="clearfix clear"></div>
    <div class="col-md-12">
        <div class="table-fix-height margin-px-30">
            <table class="table table-responsive table-bordered table-hover " id="data_table">
                <thead>
                <th>Location</th>
                <th>Total</th>
                <th>Male</th>
                <th>Female</th>
                <th>Other</th>
                </thead>

                <tbody>

                </tbody>
            </table>
        </div>
    </div>


@stop
@section('js_section')
    {{--<script src="{{ asset('assets/js/jquery.js')}}"></script>--}}
    <script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/ncdb/js/reports/birth.js') }}"></script>
@stop