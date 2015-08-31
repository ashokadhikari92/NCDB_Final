@extends('layouts1.master')

@section('content')
    <div class="panel panel-default">
        {{--<div class="panel-body">--}}
            @include('errors.error')
        {{--</div>--}}
    </div>

{{--<div class="panel-body">--}}
  <div class="content-box-large">
   <div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs ">
            <li class="active"><a data-toggle="tab" href="#tab1"><h6>Child Details</h6></a></li>
            <li><a data-toggle="tab" href="#tab2"><h6>Parents Details</h6></a></li>
            <li><a data-toggle="tab" href="#tab3"><h6>Informer Details</h6></a></li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="tab1">
                {!! Form::open(['route'=>'birth_details.store']) !!}
                <div class="col-lg-12">
                    <legend>Personal Detail</legend>
                </div>

                    <div class="form-group col-lg-6">
                        {!! Form::label('brth_first_name','First Name') !!}
                        {!! Form::text('brth_first_name',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('brth_last_name','Last Name') !!}
                         {!! Form::text('brth_last_name',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('brth_birth_date','Birth Date (B.S)') !!}
                         {!! Form::text('brth_birth_date',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                        {!! Form::label('brth_birth_date_ad','Birth Date (A.D)') !!}
                        {!! Form::text('brth_birth_date_ad',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                        {!! Form::label('brth_birth_place','Birth Place: ') !!}
                            <select class="form-control" name="brth_birth_place">
                                 <option value="">Choose Birth Place</option>
                                 <option value="Home">Home</option>
                                 <option value="Hospital">Hospital</option>
                                 <option value="Other">Other</option>
                             </select>
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('brth_birth_helper','Birth Helper: ') !!}
                           <select class="form-control">
                                <option value="">Choose Birth Helper</option>
                                <option value="People at Home">People at Home</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Doctor">Doctor</option>
                            </select>
                    </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('brth_gender','Gender: ') !!}
                           <select class="form-control" name="brth_gender">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                     </div>


                     <div class="form-group col-lg-12">
                        <legend><h4>Child Birth Address</h4></legend>
                    </div>
                     <div class="form-group col-lg-4">
                         {!! Form::label('brth_birth_district','District: ') !!}
                             <select class="form-control" name="brth_district" id="district">
                                <option>Choose District</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-4">
                         {!! Form::label('brth_birth_vdc','VDC/Municipality: ') !!}
                             <select class="form-control" name="brth_vdc" id="vdc">

                             </select>
                     </div>
                     <div class="form-group col-lg-4">
                         {!! Form::label('brth_birth_ward_no','Ward No: ') !!}
                             <select class="form-control" name="brth_ward_no" id="ward_no">
                                <option value="1">1</option>
                                <option value="2">2</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-4">
                         {!! Form::label('brth_country_name','Country Name : ') !!}
                             <select class="form-control" name="brth_country_name" id="country">
                                <option>Choose Country</option>
                             </select>
                     </div>

            </div> {{--End of tab-pane tab1--}}

            <div class="tab-pane" id="tab2">

                <div class="col-lg-6">
                    <div class="col-lg-12">
                    <legend class="scheduler-border"><h4>Father Details </h4></legend>
                    </div>

                    <div class="form-group col-lg-6">
                        {!! Form::label('father_first_name','First Name') !!}
                        {!! Form::text('father_first_name',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_last_name','Last Name') !!}
                         {!! Form::text('father_last_name',null,array('class'=>'form-control')) !!}
                    </div>

                     <div class="form-group col-lg-6">
                         {!! Form::label('father_district','District: ') !!}
                             <select class="form-control" name="father_district">
                                 <option value="Kathmandu">Kathmandu</option>
                                 <option value="Lalitpur">Lalitpur</option>
                                 <option value="Bhaktapur">Bhaktapur</option>

                             </select>
                     </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('father_vdc','VDC/Municipality: ') !!}
                             <select class="form-control" name="father_vdc">
                                  <option value="Kathmandu Metropolitan City">Kathmandu Metropolitan City</option>
                                  <option value="Balambu VDC">Balambu VDC</option>
                                  <option value="Budanilkantha VDC">Budanilkantha VDC</option>
                                  <option value="Daxinkali VDC">Daxinkali VDC</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('father_ward_no','Ward No: ') !!}
                             <select class="form-control" name="father_ward_no">
                                  <option value="01">01</option>
                                  <option value="02">02</option>
                                  <option value="03">03</option>
                             </select>
                     </div>
                    <legend></legend>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_citizenship_no','Citizenship No: ') !!}
                         {!! Form::text('father_citizenship_no',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_citizenship_issued_date','Citizenship Issued Date : ') !!}
                         {!! Form::text('father_citizenship_issued_date',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_citizenship_issued_district','Citizenship Issued District : ') !!}
                        {{-- {!! Form::text('father_citizenship_issued_district',null,array('class'=>'form-control')) !!}--}}
                             <select class="form-control" name="father_citizenship_issued_district">
                                  <option value="Kathmandu">Kathmandu</option>
                                  <option value="Lalitpur">Lalitpur</option>
                                  <option value="Bhaktapur">Bhaktapur</option>
                              </select>
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_passport_no','Passport No (If Foreigner) : ') !!}
                         {!! Form::text('father_passport_no',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('father_country','Country Name (Citizenship Issued): ') !!}
                             <select class="form-control">
                                 <option value="USA">USA</option>
                                 <option value="India">India</option>
                             </select>
                     </div>

                </div>

                <div class="col-lg-6">

                 <div class="col-lg-12">
                    <legend class="scheduler-border"><h4>Mother Details  </h4></legend>
                 </div>

                     <div class="form-group col-lg-6">
                        {!! Form::label('mother_first_name','First Name') !!}
                        {!! Form::text('mother_first_name',null,array('class'=>'form-control')) !!}
                     </div>
                     <div class="form-group col-lg-6">
                        {!! Form::label('mother_last_name','Last Name') !!}
                        {!! Form::text('mother_last_name',null,array('class'=>'form-control')) !!}
                     </div>


                     <div class="form-group col-lg-6">
                         {!! Form::label('mother_district','District: ') !!}
                             <select class="form-control" name="mother_district">
                                 <option value="Kathmandu">Kathmandu</option>
                                 <option value="Lalitpur">Lalitpur</option>
                                 <option value="Bhaktapur">Bhaktapur</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('mother_vdc','VDC/Municipality: ') !!}
                             <select class="form-control" name="mother_vdc">
                                 <option value="Kathmandu Metropolitan City">Kathmandu Metropolitan City</option>
                                  <option value="Balambu VDC">Balambu VDC</option>
                                  <option value="Budanilkantha VDC">Budanilkantha VDC</option>
                                  <option value="Daxinkali VDC">Daxinkali VDC</option>
                             </select>
                     </div>
                     <div class="form-group col-lg-6">
                         {!! Form::label('mother_ward_no','Ward No: ') !!}
                             <select class="form-control">
                                  <option value="01">01</option>
                                  <option value="02">02</option>
                                  <option value="03">03</option>
                             </select>
                     </div>

                    <legend></legend>

                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_citizenship_no','Citizenship No: ') !!}
                         {!! Form::text('mother_citizenship_no',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_citizenship_issued_date','Citizenship Issued Date : ') !!}
                         {!! Form::text('mother_citizenship_issued_date',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_citizenship_issued_district','Citizenship Issued District : ') !!}
                         {{--{!! Form::text('mother_citizenship_issued_district',null,array('class'=>'form-control')) !!}--}}
                            <select class="form-control" name="mother_citizenship_issued_district" id="district">
                                     <option value="Kathmandu">Kathmandu</option>
                                                                      <option value="Lalitpur">Lalitpur</option>
                                                                      <option value="Bhaktapur">Bhaktapur</option>
                              </select>
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_passport_no','Passport No (If Foreigner) : ') !!}
                         {!! Form::text('mother_passport_no',null,array('class'=>'form-control')) !!}
                     </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('mother_country','Country Name (Citizenship Issued): ') !!}
                             <select class="form-control" name="mother_country">
                                 <option value="">USA</option>
                                 <option value="">India</option>
                             </select>
                     </div>
                </div>

                <div class="col-lg-6">

                    <legend class="scheduler-border"><h4>Common Details</h4></legend>

                    <div class="form-group col-lg-12">
                         {!! Form::label('common_marriage_registration_no','Marriage Registration No : ') !!}
                         {!! Form::text('common_marriage_registration_no',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('common_marriage_date_ad','Marriage Date (A.D) : ') !!}
                         {!! Form::text('common_marriage_date_ad',null,array('class'=>'form-control')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('common_marriage_date_bs','Marriage Date (B.S) : ') !!}
                         {!! Form::text('common_marriage_date_bs',null,array('class'=>'form-control')) !!}
                    </div>

                </div>

                <div class="col-lg-6">

                    <legend class="scheduler-border"><h4>Grand Parents Details</h4></legend>
                    <div class="form-group col-lg-6">
                         {!! Form::label('grand_father_first_name','First Name : ') !!}
                         {!! Form::text('grand_father_first_name',null,array('class'=>'form-control','placeholder'=>'Grand Father')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('grand_father_last_name','Last Name : ') !!}
                         {!! Form::text('grand_father_last_name',null,array('class'=>'form-control','placeholder'=>'Grand Father')) !!}
                    </div>

                    <legend></legend>
                    <div class="form-group col-lg-6">
                         {!! Form::label('grand_mother_first_name','First Name : ') !!}
                         {!! Form::text('grand_mother_first_name',null,array('class'=>'form-control','placeholder'=>'Grand Mother')) !!}
                    </div>
                    <div class="form-group col-lg-6">
                         {!! Form::label('grand_mother_last_name','Last Name : ') !!}
                         {!! Form::text('grand_mother_last_name',null,array('class'=>'form-control','placeholder'=>'Grand Mother')) !!}
                    </div>


                </div>

            </div>

            <div class="tab-pane" id="tab3">
                <div class="col-lg-12">
                    <legend>Personal Detail</legend>
                </div>
                 <div class="form-group col-lg-6">
                    {!! Form::label('infr_first_name','First Name') !!}
                    {!! Form::text('infr_first_name',null,array('class'=>'form-control')) !!}
                 </div>
                 <div class="form-group col-lg-6">
                    {!! Form::label('infr_last_name','Last Name') !!}
                    {!! Form::text('infr_last_name',null,array('class'=>'form-control')) !!}
                 </div>
                  <div class="form-group col-lg-12">
                    {!! Form::label('infr_relation','Relation with Child: ') !!}
                    <select class="form-control">
                        <option value="">Father</option>
                        <option value="">Mother</option>
                        <option value="">Uncle</option>
                        <option value="">Aunt</option>
                        <option value="">Grand Father</option>
                        <option value="">Grand Mother</option>
                    </select>
                  </div>

                       <div class="col-lg-12">
                        <legend></legend>
                       </div>
                       <div class="form-group col-lg-6">
                           {!! Form::label('form_filled_date','Form Filled Date : ') !!}
                           {!! Form::text('form_filled_date',null,array('class'=>'form-control')) !!}
                       </div>
            </div>

            <div class="col-lg-12">
            {!!Form::submit('Save',['class'=>'btn btn-info']) !!}
            {!! Form::close() !!}
            <a href="{!!route('birth_details.index')!!}" ><button class="btn btn-warning">Cancel</button></a>
            </div>

      {{--  </div>--}}
    </div>

   </div>
</div>
</div>
@stop

@section('js_section')
    <script src="{{ asset('assets/ncdb/js/birth/create.js') }}"></script>
@stop