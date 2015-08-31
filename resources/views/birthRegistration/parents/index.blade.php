@extends('layouts1.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Parent</a>
        </li>
        <li><a href="#">Index</a></li>
    </ul>

    <div class="panel pull-down">
        <div class="panel-body">

            <span class="" > <a href="{!!route('parents.create')!!}" ><button class="btn btn-warning">Add New</button></a></span>

            @include('errors.error')

        </div>
    </div>
    <div class="panel-body table-responsive">
        <table id="data_table" class="table table-striped table-bordered">
            <thead class="dtHead">
            <tr class="dtThRow">
                <th>Citizenship No</th>
                <th>Full Name </th>
                <th>Occupation</th>
                <th>Gender</th>
                <th>Education Level</th>
                <th>Details</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody class="dtBody">

            </tbody>
        </table>
    </div>

@stop

@section('js_section')
    <script src="{{ asset('assets/ncdb/js/birth/parents.js') }}"></script>
@stop