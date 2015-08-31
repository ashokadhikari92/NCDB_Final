@extends('layouts1.master')
@section('css')

@stop
@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Vaccination</a>
        </li>
        <li><a href="#">Provide Vaccine</a></li>
    </ul>

    <div class="panel panel-default">
      @include('errors.error')
 </div>

 <div class="content-box-large">

                {!! Form::open(['route'=>'vaccination.program.store']) !!}
                <div class="col-lg-12">
                    <legend class="header">Vaccination Program</legend>
                </div>
                <input type="hidden" name="chld_vcin_registration_id" value="{{$child->brth_registration_id}}">
                <input type="hidden" name="chld_vcin_vaccine_id" value="{{$vaccine->vcin_id}}">
                <div class="form-group col-lg-6">
                    {!! Form::label('vcin_name','Vaccine Name:') !!}
                    {!! Form::text('vcin_name',$vaccine->vcin_name,array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-6">
                     {!! Form::label('chld_vcin_dose_no','Dose No :') !!}
                     {!! Form::text('chld_vcin_dose_no',$vaccine->which_dose,array('class'=>'form-control')) !!}
                </div>

               <div class="form-group col-lg-6">
                    {!! Form::label('chld_vcin_vaccillator_id','Vaccinator:') !!}
                     <select class="form-control" name="chld_vcin_vaccillator_id">
                        @foreach($vaccilator as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group col-lg-6">
                     {!! Form::label('chld_vcin_nest_dose','Next Dose :') !!}
                     {!! Form::text('chld_vcin_nest_dose',null,array('class'=>'form-control')) !!}
                </div>
                <br>

               <div class="form-group col-lg-6">
                      {!! Form::label('vaccination_zone','Zone : ') !!}
                      {!! Form::text('vaccination_zone',$address['zone'],array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('vaccination_district','District : ') !!}
                      {!! Form::text('vaccination_district',$address['district'],array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('vaccination_vdc','VDC/Municipality: ') !!}
                      {!! Form::text('vaccination_vdc',$address['vdc'],array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('chld_vcin_address','Ward No: ') !!}
                      {!! Form::text('chld_vcin_address',$address['ward_no'],array('class'=>'form-control')) !!}
                </div>
                        {!!Form::hidden('chld_vcin_address',$user_address) !!}
                <div class="form-group col-lg-6">
                      {!! Form::label('vaccination_place','Place: ') !!}
                      <select class="form-control ward_no" name="chld_vcin_place" id="vaccination_place">
                        @foreach($places as $location)
                            <option value="{{$location->place_name}}">{{$location->place_name}}</option>
                        @endforeach
                      </select>
                </div>
                 <div class="form-group col-lg-6">
                      {!! Form::label('chld_vcin_date','Date :') !!}
                      {!! Form::text('chld_vcin_date',date('Y-m-d'),array('class'=>'form-control')) !!}
                 </div>
               <div class="col-lg-12">
                {!!Form::submit('Save',['class'=>'btn btn-info']) !!}
                {!! Form::close() !!}
               {{-- <a href="{!!route('vaccines.index')!!}" ><button class="btn btn-warning">Cancel</button></a>--}}
                {!! link_to_route('vaccination.program.show','Cancel', array($child->birth_id), array('class' => 'btn btn-warning'))!!}
                </div>

    </div>


 </div>


@stop

@section('js_section')
     <script src="{{ asset('assets/ncdb/js/birth/create.js') }}"></script>

@stop