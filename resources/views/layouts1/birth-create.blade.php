@extends('layouts1.master')
@section('content')

    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Birth Registration</a>
        </li>
        <li><a href="#">Create</a></li>
    </ul>

    {!! Form::open(['url' => 'posts','class'=>'form-horizontal']) !!}

        <div class="col-md-12">
            <div class="col-md-5">
                <div class="form-group">
                    {!! Form::label('first_name','First Name :',['class'=>'control-label']) !!}
                    {!! Form::text('first_name',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <div class="form-group">
                    {!! Form::label('last_name','Last Name :',['class'=>'control-label']) !!}
                    {!! Form::text('last_name',null,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('full_name','Full Name :',['class'=>'control-label']) !!}
                    {!! Form::text('full_name',null,['class'=>'form-control']) !!}
                </div>
            </div>
       </div>


        <div class="col-md-12  border-for-bottom">
            <div class="col-md-5">
                <div class="form-group">
                    {!! Form::label('dob','Date of Birth(B.S.) :',['class'=>'control-label']) !!}
                    {!! Form::text('dob',null,['class'=>'form-control datepicker']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('birth_place','Birth Place :',['class'=>'control-label']) !!}
                    {!! Form::select('birth_place',['Hospital','Home'],null,['class'=>'form-control ']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('gender','Gender :',['class'=>'control-label']) !!}
                    {!! Form::select('gender',['Male','Female','Other'],null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('birth_type','Birth Type:',['class'=>'control-label']) !!}
                    {!! Form::select('birth_type',['Single','double','triple'],null,['class'=>'form-control']) !!}
                </div>

            </div>
            <div class="col-md-5 col-md-offset-2">
                <div class="form-group">
                    {!! Form::label('dob','Date of Birth(A.D.) :',['class'=>'control-label']) !!}
                    {!! Form::text('dob',null,['class'=>'form-control datepicker']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('birth_healper','Birth Helper :',['class'=>'control-label']) !!}
                    {!! Form::select('birth_helper',['People of Home','Nurse'],null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('caste','Caste :',['class'=>'control-label']) !!}
                    {!! Form::select('caste',['Brahman','Newar','Magar'],null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('handicap','Handicap:',['class'=>'control-label']) !!}
                    {!! Form::select('handicap',['None','Yes',],null,['class'=>'form-control']) !!}
                </div>

            </div>
        </div>


        <div class="col-md-12 border-for-bottom">
            <h4 class="text-center">Birth Address</h4>
            <div class="col-md-5">
                <div class="form-group">
                    {!! Form::label('zone','Zone:',['class'=>'control-label']) !!}
                    {!! Form::select('zone',['Lumbini','Bagmati','Gandaki'],null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('vdc','VDC:',['class'=>'control-label']) !!}
                    {!! Form::select('vdc',['Shivamandir','Koilapani','kawasoti'],null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <div class="form-group">
                    {!! Form::label('district','District:',['class'=>'control-label']) !!}
                    {!! Form::select('district',['Nawalparasi','Chitwan','Kathmandu'],null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('ward_no','Ward No :',['class'=>'control-label']) !!}
                    {!! Form::select('ward_no',['4','1','7'],null,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>


        <div class="col-md-12 border-for-bottom">
            <div class="col-md-5">
                <div class="form-group">
                    <h4>Is child Born in Foreign</h4>
					{!! Form::radio('child_country', 'true',['class'=>'col-md-2']) !!} Yes
                    {!! Form::radio('child_country', 'false',['class'=>'col-md-offset-2']) !!} No
                </div>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <div class="form-group">
                    {!! Form::label('country','Country :',['class'=>'control-label']) !!}
                    {!! Form::select('country',['Nepal','India','China'],null,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="col-md-12 ">
            <div class="col-md-5">
                <div class="form-group">
                    {!! Form::label('father_citizenship','Father Citizenship :',['class'=>'control-label']) !!}
                    {!! Form::text('father_citizenship',null,['class'=>'form-control ']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('grand_father','Grand Father :',['class'=>'control-label']) !!}
                    {!! Form::text('grand_father',null,['class'=>'form-control ']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('informer','Informer  :',['class'=>'control-label']) !!}
                    {!! Form::text('informer',null,['class'=>'form-control ']) !!}
                </div>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <div class="form-group">
                    {!! Form::label('mother_citizenship','Mother Citizenship :',['class'=>'control-label']) !!}
                    {!! Form::text('mother_citizenship',null,['class'=>'form-control ']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('grand_mother','Grand Mother :',['class'=>'control-label']) !!}
                    {!! Form::text('grand_mother',null,['class'=>'form-control ']) !!}
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
@stop