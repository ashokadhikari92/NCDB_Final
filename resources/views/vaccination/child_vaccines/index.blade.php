@extends('layouts1.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Vaccination</a>
        </li>
        <li><a href="#">Index</a></li>
    </ul>

    <div class="panel pull-down">
        <div class="panel-body">

                <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Find Child</button>

            @include('errors.error')

        </div>
    </div>
 <div class="panel-body table-responsive">
    <table id="data_table" class="table table-striped table-bordered">
        <thead class="dtHead">
        <tr class="dtThRow">
    	    <th>Registration No</th>
    		<th>Full Name </th>
            <th>Address</th>
            <th>Vaccine Name</th>
            <th>Which Dose</th>
            <th>Given Date</th>
    		<th>Details</th>
    		<th>Edit</th>
        </tr>
        </thead>
        <tbody class="dtBody">

        </tbody>
    </table>
 </div>
 <div class="container">


     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h4 class="modal-title" id="myModalLabel">Enter the Registration Id</h4>
       </div>
       <div class="modal-body">
        <input type="text" name="child_registration_id" id="registration_id" placeholder="Enter the Child Registration Id" class="form-control">
       </div>
       <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close </button>
           <button type="button" class="btn btn-warning" id="bth_find_child">Find the Child</button> </div>
       </div>
       </div>
       </div>
 </div>

@stop

@section('js_section')
 <script src="{{ asset('assets/ncdb/js/child_vaccine/child_vaccine.js') }}"></script>
@stop