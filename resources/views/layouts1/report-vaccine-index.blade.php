@extends('layouts1.master')
@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Report / Vaccination</a>
        </li>
        <li><a href="#">index</a></li>
    </ul>

    {!! Form::open() !!}
        <div class="col-md-12">
            <div class="col-md-4">

                <div class="form-group">
                    {!! Form::label('from','From :',['class'=>'control-label']) !!}
                    {!! Form::text('from',null,['class'=>'form-control datepicker']) !!}
                </div>

            </div>

            <div class="col-md-4 col-md-offset-4">
                <div class="form-group">
                    {!! Form::label('to','To :',['class'=>'control-label']) !!}
                    {!! Form::text('to',null,['class'=>'form-control datepicker']) !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('zone','Zone:',['class'=>'control-label']) !!}
                    {!! Form::select('zone',['Lumbini','Bagmati','Gandaki'],null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="col-md-2 ">
                <div class="form-group">
                    {!! Form::label('district','District:',['class'=>'control-label']) !!}
                    {!! Form::select('district',['Nawalparasi','Chitwan','Kathmandu'],null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="col-md-2 ">
                <div class="form-group">
                    {!! Form::label('vdc','VDC:',['class'=>'control-label']) !!}
                    {!! Form::select('vdc',['Shivamandir','Koilapani','kawasoti'],null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="col-md-2 ">
                <div class="form-group">
                    {!! Form::label('ward_no','Ward No :',['class'=>'control-label']) !!}
                    {!! Form::select('ward_no',['4','1','7'],null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('vaccine','Vaccine :',['class'=>'control-label']) !!}
                    {!! Form::select('vaccine',['vaccine1','vaccine2','vaccine'],null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('dose','Select Dose :',['class'=>'control-label']) !!}
                    {!! Form::select('dose',['Dose1','Dose2','Dose3'],null,['class'=>'form-control']) !!}
                </div>
            </div>

        </div>
    {!! Form::close() !!}

    <div class="clearfix clear"></div>
    <div class="table-fix-height margin-px-30">
        <table class="table table-responsive table-bordered table-hover ">
            <thead>
            <th>Vaccines</th>
            <th>Total</th>
            <th>Male</th>
            <th>Female</th>
            <th>Other</th>
            </thead>

            <tbody>
            <tr>
                <td>vaccine1</td>
                <td>200</td>
                <td>90</td>
                <td>100</td>
                <td>10</td>
            </tr>
            <tr>
                <td>vaccine1</td>
                <td>200</td>
                <td>90</td>
                <td>100</td>
                <td>10</td>
            </tr><tr>
                <td>vaccine1</td>
                <td>200</td>
                <td>90</td>
                <td>100</td>
                <td>10</td>
            </tr><tr>
                <td>vaccine1</td>
                <td>200</td>
                <td>90</td>
                <td>100</td>
                <td>10</td>
            </tr>
            </tbody>
        </table>
    </div>

@stop
@section('js_section')
<script src="{{asset('assets/datatables/js/jquery.dataTables.min.js')}}"></script>
@stop