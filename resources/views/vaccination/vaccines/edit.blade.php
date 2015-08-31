@extends('layouts1.master')
@section('css')

@stop
@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Vaccine</a>
        </li>
        <li><a href="#">Edit</a></li>
    </ul>

    <div class="panel panel-default">
      @include('errors.error')
 </div>

 <div class="content-box-large">

                {!! Form::model($vaccine,['method'=>'PATCH','route'=>['vaccines.update',$vaccine->vcin_id]]) !!}
                <div class="col-lg-12">
                    <legend class="header">Edit Vaccine Details</legend>
                </div>

                <div class="form-group col-lg-6">
                    {!! Form::label('vcin_name','Vaccine Name') !!}
                    {!! Form::text('vcin_name',null,array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-6">
                     {!! Form::label('vcin_dose','Vaccine Dose No :') !!}
                     {!! Form::text('vcin_dose',null,array('class'=>'form-control')) !!}
                </div>



               <div class="col-lg-12">
                {!!Form::submit('Update',['class'=>'btn btn-info']) !!}
                {!! Form::close() !!}
                <a href="{!!route('vaccines.index')!!}" ><button class="btn btn-warning">Cancel</button></a>
                </div>

    </div>


 </div>


@stop

@section('js_section')
     <script src="{{ asset('assets/ncdb/js/birth/create.js') }}"></script>

@stop