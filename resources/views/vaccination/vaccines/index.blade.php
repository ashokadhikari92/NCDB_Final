@extends('layouts1.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Vaccine</a>
        </li>
        <li><a href="#">Index</a></li>
    </ul>

    <div class="panel pull-down">
        <div class="panel-body">

            <span class="" > <a href="{!!route('vaccines.create')!!}" ><button class="btn btn-warning">Add New</button></a></span>

            @include('errors.error')

        </div>
    </div>
    <div class="panel-body">
        <table id="data_table" class="table table-striped table-bordered">
                <thead class="dtHead">
                <tr class="dtThRow">
            	    <th>Vaccine Name</th>
            		<th>Vaccine Dose </th>
            		<th>Dose Intervals</th>
            		<th>Edit</th>
            		<th>Delete</th>
                </tr>
                </thead>
                <tbody class="dtBody">

                </tbody>
            </table>
    </div>

@stop

@section('js_section')
 <script src="{{ asset('assets/ncdb/js/vaccines/init.js') }}"></script>
@stop