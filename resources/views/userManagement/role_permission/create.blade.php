@extends('layouts1.configuration.master')

@section('content')
 <div class="panel-default pull-down">
       @include('errors.error')
 </div>

 {{--<div class="panel-body pull-down">--}}
    <h2> Assign Permissions </h2>


    {!! Form::open(array('route' => 'role_permission.store')) !!}
        <div class="col-lg-4">
            <div class="form-group">
                {!! Form::label('name', 'Role Name:')!!}
                {{--{!! Form::text('name', null, array('class' => 'form-control'))!!}--}}
                <select class="form-control" name="role" id="role_id" >
                   @foreach($roles as $role)
                     <option value="{!!$role->id !!}" onchange="loadPermissions(this)">{!!$role->name !!}</option>
                   @endforeach
                 </select>
             </div>
        </div>
        <div class="col-lg-8">
            <label>Permissions : </label>
            <div class="panel-body">
                <table id="permission_table">

                </table>
            </div>

        </div>



    {!! Form::submit('Submit', array('class' => 'btn btn-info'))!!}
    {!! link_to_route('roles.index','Cancel',null, array('class' => 'btn btn-danger'))!!}


    {!! Form::close() !!}

 {{--</div>--}}

@stop
@section('js_section')
    <script src="{{ asset('assets/ncdb/js/role_permission/role_permission_init.js') }}"></script>
@stop