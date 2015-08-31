<div class="form-group col-lg-6">
    {!! Form::label('prnt_first_name','First Name') !!}
    {!! Form::text('prnt_first_name',null,array('class'=>'form-control')) !!}
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_last_name','Last Name') !!}
    {!! Form::text('prnt_last_name',null,array('class'=>'form-control')) !!}
</div>
<div class="form-group col-lg-12">
    {!! Form::label('prnt_full_name_nepali','Full Name') !!}
    <font face="Nepali">{!! Form::text('prnt_full_name_nepali',null,array('class'=>'form-control','placeholder'=>'नेपालीमा')) !!}</font>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_gender','Gender') !!}
    <select class="form-control zone" name="prnt_gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_occupation','Occupation') !!}
    <select name="prnt_occupation" class="form-control">
        <option value="Business Man">Business Man</option>
        <option value="Farmer">Farmer</option>
    </select>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_religion','Religion') !!}
    <select name="prnt_religion" class="form-control">
        <option value="Hindu">Hindu</option>
        <option value="Budhist">Budhist</option>
    </select>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_native_language','Native Language') !!}
    <select name="prnt_native_language" class="form-control">
        <option value="Nepali">Nepali</option>
        <option value="Newari">Newari</option>
    </select>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_education_level','Education Level') !!}
    <select name="prnt_education_level" class="form-control">
        <option value="Graduate">Graduate</option>
        <option value="SLC">SLC</option>
    </select>
</div>
<hr>
<div class="col-lg-12">
    <h3>Address</h3>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_address','Zone : ') !!}
    <select class="form-control zone" name="prnt_address" id="father_zone">
        <option>Choose Zone</option>
    </select>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_address','District : ') !!}
    <select class="form-control district" name="prnt_address" id="father_district">

    </select>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_address','VDC/Municipality: ') !!}
    <select class="form-control vdc" name="prnt_address" id="father_vdc">

    </select>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_address','Ward No: ') !!}
    <select class="form-control ward_no" name="prnt_address" id="father_ward_no">

    </select>
</div>
<div class="col-lg-12">
    <h3>Citizenship Certificate Detail</h3>
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_citizenship_no','Citizenship No: ') !!}
    {!! Form::text('prnt_citizenship_no',null,array('class'=>'form-control')) !!}
</div>
<div class="form-group col-lg-6">
    {!! Form::label('prnt_citizenship_issued_district','Issued District : ') !!}
    <select class="form-control" name="prnt_citizenship_issued_district" >
        @foreach($districts as $district)
            <option value="{{$district->locn_name}}">{{$district->locn_name}}</option>
        @endforeach
    </select>
</div>
