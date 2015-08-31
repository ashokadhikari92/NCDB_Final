@extends('layouts1.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Vaccination</a>
        </li>
        <li><a href="#">Show</a></li>
    </ul>

    <div class="panel pull-down">
        <div class="panel-body">
            @include('errors.error')
        </div>
    </div>

  <div class="panel-body table-responsive">
    <table id="data_table" class="table table-striped table-bordered">
        <thead class="dtHead">
        <tr class="dtThRow">
    	    <th>Vaccine Name</th>
    		<th>Which Dose</th>
    		<th>Previous Dose</th>
    		<th>Next Dose</th>
    		<th>Action </th>
        </tr>
        </thead>
        <tbody class="dtBody">
            @foreach($vaccines as $vaccine)
             <tr class="dtThRow">
                <th>$vaccine->vcin_name</th>
                <th>Which Dose</th>
                <th>Previous Dose</th>
                <th>Next Dose</th>
                <th></th>
            </tr>
            @endforeach
        </tbody>
    </table>
 </div>
@stop

@section('js_section')
 <script src="{{ asset('assets/ncdb/js/child_vaccine/vaccine_program.js') }}"></script>
@stop