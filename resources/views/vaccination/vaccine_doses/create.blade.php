@extends('layouts1.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Vaccine</a>
        </li>
        <li><a href="#">Assign Dose Interval</a></li>
    </ul>

    <div class="panel pull-down">
        <div class="panel-body">
            @include('errors.error')
        </div>
    </div>

 <div class="panel-body">
    <div class="content-box-large">

                    {!! Form::open(['route'=>'vaccine_doses.store']) !!}
                    <div class="col-lg-12">
                        <legend class="header">Vaccine and Dose Interval</legend>
                        <span class="pull-left">Vaccine Name : {{$vaccine->vcin_name}}</span>
                    </div>
                    {!! Form::hidden('vaccine_id',$vaccine->vcin_id)!!}
                    <div class="label-info"></div>
                    @for($i=1;$i<=$vaccine->vcin_dose;$i++)
                        <div class="panel-group">
                           <div class="label col-lg-12">
                               <span>Vaccine Dose No {{$i}}</span>
                               {!! Form::hidden('dose_no[]',$i)!!}
                           </div>
                            <div class="form-group col-lg-4">
                                {!! Form::label('years','Years ') !!}
                                {!! Form::text('years[]',null,array('class'=>'form-control')) !!}
                            </div>
                            <div class="form-group col-lg-4">
                                {!! Form::label('months','Months ') !!}
                                {!! Form::text('months[]',null,array('class'=>'form-control')) !!}
                            </div>
                            <div class="form-group col-lg-4">
                                {!! Form::label('days','Days ') !!}
                                {!! Form::text('days[]',null,array('class'=>'form-control')) !!}
                            </div>
                        </div>

                    @endfor
                   <div class="col-lg-12">
                    {!!Form::submit('Save',['class'=>'btn btn-info']) !!}
                    {!! Form::close() !!}
                    <a href="{!!route('vaccine_doses.index')!!}" ><button class="btn btn-warning">Cancel</button></a>
                    </div>

        </div>

 </div>

@stop

@section('js_section')
 <script src="{{ asset('assets/ncdb/js/child_vaccine/vaccine_program.js') }}"></script>
@stop