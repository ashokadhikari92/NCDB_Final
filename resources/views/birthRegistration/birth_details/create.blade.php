@extends('layouts1.master')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nepali.datepicker.css')}}">
@stop
@section('content')
 <div class="panel panel-default">
      @include('errors.error')
 </div>

 <div class="content-box-large">
    <ul class="nav nav-tabs responsive nav-justified" id="myTab">
      <li class="active"><a href="#child_details">Child Details</a></li>
      <li><a href="#birth_address">Birth Address</a></li>
      <li><a href="#father">Father</a></li>
      <li><a href="#mother">Mother</a></li>
      <li><a href="#grand_parent">Grand Parents</a></li>
      <li><a href="#informer">Informer</a></li>
    </ul>

    <div class="tab-content responsive">

      <div class="tab-pane active" id="child_details">
                {!! Form::open(['route'=>'birth_details.store']) !!}
                <div class="col-lg-12">
                    <legend class="header">Child Details</legend>
                </div>

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
                    <font face="Nepali">{!! Form::text('brth_full_name',null,array('class'=>'form-control','placeholder'=>'नेपालीमा')) !!}</font>
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
                      <select class="form-control" name="brth_birth_place" id="birth_place">
                          @foreach($birthPlaces as $key => $value)
                            <option value="{{$value}}">{{$value}}</option>
                          @endforeach
                      </select>
                </div>
                <div class="form-group col-lg-6">
                     {!! Form::label('brth_birth_helper','Birth Helper') !!}
                      <select class="form-control" name="brth_birth_helper" id="birth_helper">
                          @foreach($birthHelpers as $key => $value)
                            <option value="{{$value}}">{{$value}}</option>
                          @endforeach
                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_gender','Gender') !!}
                       <select class="form-control" name="brth_gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                       </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_caste','Caste') !!}
                       <select class="form-control" name="brth_caste" id="caste">
                            @foreach($castes as $key => $value)
                              <option value="{{$value}}">{{$value}}</option>
                            @endforeach
                       </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_type','Birth Type') !!}
                       <select class="form-control" name="brth_birth_type">
                            @foreach($birthTypes as $key => $value)
                               <option value="{{$value}}">{{$value}}</option>
                            @endforeach
                       </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_handicap','Handicap') !!}
                        <select name="brth_handicap" class="form-control">
                             @foreach($handicapType as $key => $value)
                                <option value="{{$value}}">{{$value}}</option>
                             @endforeach
                        </select>
                </div>

      </div>

      <div class="tab-pane" id="birth_address">

                <div class="col-lg-12">
                    <legend class="header">Birth Address</legend>
                </div>

                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_zone','Zone : ') !!}
                      <select class="form-control zone" name="brth_zone" id="zone">
                      <option>Choose A Zone</option>
                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_district','District : ') !!}
                      <select class="form-control district" name="brth_district" id="district">

                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_vdc','VDC/Municipality: ') !!}
                      <select class="form-control vdc" name="brth_vdc" id="vdc">

                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_birth_ward_no','Ward No: ') !!}
                      <select class="form-control ward_no" name="brth_ward_no" id="ward_no">

                      </select>
                </div>
                <div class="col-lg-12">
                    <h3>If Child was born in Foreign</h3>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('brth_country_name','Country Name : ') !!}
                      <select class="form-control select2" name="brth_country_name" id="country">
                          @foreach($countries as $country)
                                <option value="{{$country->name}}">{{$country->name}}</option>
                          @endforeach
                      </select>
                </div>

      </div>

      <div class="tab-pane" id="father">
               <div class="col-lg-12">
                    <legend class="header">Father Details</legend>
               </div>

               <div class="form-group col-lg-6">
                    {!! Form::label('father_first_name','First Name') !!}
                    {!! Form::text('father_first_name',null,array('class'=>'form-control')) !!}
               </div>
               <div class="form-group col-lg-6">
                    {!! Form::label('father_last_name','Last Name') !!}
                    {!! Form::text('father_last_name',null,array('class'=>'form-control')) !!}
               </div>
               <div class="form-group col-lg-12">
                     {!! Form::label('father_full_name','Full Name') !!}
                     <font face="Nepali">{!! Form::text('father_full_name',null,array('class'=>'form-control','placeholder'=>'नेपालीमा')) !!}</font>
               </div>
               <hr>
                <div class="col-lg-12">
                    <h3>Address</h3>
                </div>
              {{--  <div class="form-group col-lg-6">
                       {!! Form::label('father_district','Region : ') !!}
                       <select class="form-control" name="father_region" id="region">
                       <option>Choose Region</option>
                       </select>
                 </div>--}}
                <div class="form-group col-lg-6">
                       {!! Form::label('father_zone','Zone : ') !!}
                          <select class="form-control zone" name="father_zone" id="father_zone">
                          <option>Choose Zone</option>
                          </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('father_district','District : ') !!}
                      <select class="form-control district" name="father_district" id="father_district">

                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('father_vdc','VDC/Municipality: ') !!}
                      <select class="form-control vdc" name="father_vdc" id="father_vdc">

                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('father_ward_no','Ward No: ') !!}
                      <select class="form-control ward_no" name="father_ward_no" id="father_ward_no">

                      </select>
                </div>
                <div class="col-lg-12">
                     <h3>Citizenship Certificate Detail</h3>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('father_citizenship_no','Citizenship No: ') !!}
                      {!! Form::text('father_citizenship_no',null,array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-6">
                       {!! Form::label('father_citizenship_issued_district','Issued District : ') !!}
                       <select class="form-control" name="father_citizenship_issued_district" >
                       @foreach($districts as $district)
                            <option value="{{$district->locn_name}}">{{$district->locn_name}}</option>
                       @endforeach
                       </select>
                </div>
                <div class="form-group col-lg-6">
                       {!! Form::label('father_citizenship_issued_date','Citizenship Issued Date: ') !!}
                       {!! Form::text('father_citizenship_issued_date',null,array('class'=>'form-control nepali-calendar')) !!}
                </div>

      </div>

      <div class="tab-pane" id="mother">
               <div class="col-lg-12">
                    <legend class="header">Mother Details</legend>
               </div>

               <div class="form-group col-lg-6">
                    {!! Form::label('mother_first_name','First Name') !!}
                    {!! Form::text('mother_first_name',null,array('class'=>'form-control')) !!}
               </div>
               <div class="form-group col-lg-6">
                    {!! Form::label('mother_last_name','Last Name') !!}
                    {!! Form::text('mother_last_name',null,array('class'=>'form-control')) !!}
               </div>
               <div class="form-group col-lg-12">
                     {!! Form::label('mother_full_name','Full Name') !!}
                     <font face="Nepali">{!! Form::text('mother_full_name',null,array('class'=>'form-control','placeholder'=>'नेपालीमा')) !!}</font>
               </div>
               <hr>
                <div class="col-lg-12">
                    <h3>Address</h3>
                </div>
                <div class="form-group col-lg-6">
                       {!! Form::label('mother_zone','Zone : ') !!}
                       <select class="form-control zone" name="mother_zone" id="mother_zone">
                       <option>Choose Region</option>
                       </select>
                 </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('mother_district','District : ') !!}
                      <select class="form-control district" name="mother_district" id="mother_district">
                      <option>Choose District</option>
                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('mother_vdc','VDC/Municipality: ') !!}
                      <select class="form-control vdc" name="mother_vdc" id="mother_vdc">

                      </select>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('mother_ward_no','Ward No: ') !!}
                      <select class="form-control ward_no" name="mother_ward_no" id="mother_ward_no">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      </select>
                </div>
               <div class="col-lg-12">
                     <h3>Citizenship Certificate Detail</h3>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('mother_citizenship_no','Citizenship No: ') !!}
                      {!! Form::text('mother_citizenship_no',null,array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-6">
                       {!! Form::label('mother_citizenship_issued_district','Issued District : ') !!}
                       <select class="form-control" name="mother_citizenship_issued_district">
                       @foreach($districts as $district)
                             <option value="{{$district->locn_name}}">{{$district->locn_name}}</option>
                        @endforeach
                       </select>
                </div>
               <div class="form-group col-lg-6">
                        {!! Form::label('mother_citizenship_issued_date','Citizenship Issued Date: ') !!}
                        {!! Form::text('mother_citizenship_issued_date',null,array('class'=>'form-control nepali-calendar issued-district')) !!}
               </div>

      </div>
     <div class="tab-pane" id="grand_parent">
               <div class="col-lg-12">
                    <legend class="header">Grand Father</legend>
               </div>

               <div class="form-group col-lg-6">
                    {!! Form::label('gfather_first_name','First Name') !!}
                    {!! Form::text('gfather_first_name',null,array('class'=>'form-control')) !!}
               </div>
               <div class="form-group col-lg-6">
                    {!! Form::label('gfather_last_name','Last Name') !!}
                    {!! Form::text('gfather_last_name',null,array('class'=>'form-control')) !!}
               </div>
               <div class="form-group col-lg-6">
                    {!! Form::label('gfather_full_name','Last Name') !!}
                    <font face="Nepali">{!! Form::text('gfather_full_name',null,array('class'=>'form-control','placeholder'=>'नेपालीमा')) !!}</font>
               </div>
               <div class="col-lg-12">
                     <h3>Citizenship Certificate Detail</h3>
                </div>
                <div class="form-group col-lg-6">
                      {!! Form::label('gfather_citizenship_no','Citizenship No: ') !!}
                      {!! Form::text('gfather_citizenship_no',null,array('class'=>'form-control')) !!}
                </div>
                <div class="form-group col-lg-6">
                       {!! Form::label('gfather_citizenship_issued_district','Issued District : ') !!}
                       <select class="form-control" name="gfather_citizenship_issued_district">
                          @foreach($districts as $district)
                                <option value="{{$district->locn_name}}">{{$district->locn_name}}</option>
                           @endforeach
                       </select>
                </div>

      </div>



      <div class="tab-pane" id="informer">
        <div class="col-lg-12">
                    <legend class="header">Informer</legend>
               </div>

               <div class="form-group col-lg-12">
                    {!! Form::label('brth_informer','Full Name') !!}
                    {!! Form::text('brth_informer',null,array('class'=>'form-control')) !!}
               </div>

      </div>


               <div class="col-lg-12">
                {!!Form::submit('Save',['class'=>'btn btn-info']) !!}
                {!! Form::close() !!}
                <a href="{!!route('birth_details.index')!!}" ><button class="btn btn-warning">Cancel</button></a>
                </div>

    </div>


 </div>


@stop

@section('js_section')
     <script src="{{ asset('assets/ncdb/js/birth/create.js') }}"></script>
     <script src="{{asset('assets/js/responsive-tabs.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
     <script src="{{asset('assets/js/nepali.datepicker.min.js')}}"></script>
     <script type="text/javascript">
           $( '#myTab a' ).click( function ( e ) {
             e.preventDefault();
             $( this ).tab( 'show' );
           } );

           ( function( $ ) {
               // Test for making sure event are maintained
               $( '.js-alert-test' ).click( function () {
                 alert( 'Button Clicked: Event was maintained' );
               } );
               fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
           } )( jQuery );

         </script>


         <script type="text/javascript">
            $( ".datepicker" ).datepicker();
            $( ".nepali-calendar" ).nepaliDatePicker();
         </script>
@stop