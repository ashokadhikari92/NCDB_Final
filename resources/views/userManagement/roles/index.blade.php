@extends('layouts1.configuration.master')

 @section('content')
     <ul class="breadcrumb">
         <li>
             <span class="glyphicon glyphicon-baby-formula"></span>
             <a href="#">Role</a>
         </li>
         <li><a href="#">Index</a></li>
     </ul>

     <div class="panel pull-down">
         <div class="panel-body">

            {{-- <p>{!! link_to_route('roles.create', '',null,array('class'=>"glyphicon glyphicon-plus-sign is-add-button"))
                 !!} </p>--}}
                  <span class="" > <a href="{!!route('roles.create')!!}" ><button class="btn btn-warning">Add New</button></a></span>

             @include('errors.error')

         </div>
     </div>
 <div class="panel-body">
     <table id="data_table" class="table table-striped table-bordered">
         <thead class="dtHead">
         <tr class="dtThRow">
     	    <th>Role Id</th>
     		<th>Role Name </th>
     		<th>Description</th>
     		<th>View</th>
     		<th>Edit</th>
     		<th>Delete</th>
     		<th>Assign Permission</th>
         </tr>
         </thead>
         <tbody class="dtBody">

         </tbody>
     </table>
</div>
 @stop

 @section('js_section')
  <script src="{{ asset('assets/ncdb/js/role/role_init.js') }}"></script>
 @stop