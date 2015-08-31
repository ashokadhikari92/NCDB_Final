@extends('layouts1.configuration.master')

@section('content')

<h2> Create New Roles </h2>
@include('errors.error')
<ul class="breadcrumb">
    <li>
        <span class="glyphicon glyphicon-baby-formula"></span>
        <a href="#">Role</a>
    </li>
    <li><a href="#">Add</a></li>
</ul>


{!! Form::open(array('route' => 'roles.store')) !!}

<div class="form-group">
    {!! Form::label('name', 'Role Name:')!!}
    {!! Form::text('name', null, array('class' => 'form-control'))!!}
</div>

<div class="form-group">
    {!! Form::label('display_name', 'Role Display Name:')!!}
    {!! Form::text('display_name', null, array('class' => 'form-control'))!!}
</div>

<div class="form-group">
    {!! Form::label('description', ' Role Description:')!!}
    {!! Form::textarea('description', null, array('class' => 'form-control'))!!}
</div>


{!! Form::submit('Submit', array('class' => 'btn btn-info'))!!}
{!! link_to_route('roles.index','Cancel',null, array('class' => 'btn btn-danger'))!!}


{!! Form::close() !!}

@stop