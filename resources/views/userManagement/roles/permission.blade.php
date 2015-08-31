@extends('layouts1.configuration.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Role</a>
        </li>
        <li><a href="#">Assign Permission</a></li>
    </ul>

    <div class="panel-default pull-down">
       @include('errors.error')
 </div>

 {{--<div class="panel-body pull-down">--}}
    <h2> Assign Permissions </h2>


    {!! Form::open(array('route' => 'role_permission.store')) !!}
        <div class="col-lg-12">
            <div class="form-group">
                {!! Form::label('name', 'Role Name :')!!}{{"  ".$role->display_name}}
               <input type="hidden" name="role_id" value="{{$role->id}}">
             </div>
        </div>
        <div class="panel-body">

        <label>Permissions</label>

            @foreach($all_permissions as $permission)
                @if($permission->parent_id == 0)
                    <div class="col-lg-12">
                        <div class="form-control">
                            @if(in_array($permission->id,$permissions))
                             <input type="checkbox" checked value="{{$permission->id}}" name="{{$permission->name}}">
                            @else
                              <input type="checkbox" value="{{$permission->id}}" name="{{$permission->name}}">
                            @endif
                             <label >{{$permission->display_name}}</label>
                        </div>
                    </div>
                @else
                    <div class="col-lg-4">
                        <div class="form-control go-left">
                           @if(in_array($permission->id,$permissions))
                             <input type="checkbox" checked value="{{$permission->id}}" name="{{$permission->name}}">
                            @else
                              <input type="checkbox" value="{{$permission->id}}" name="{{$permission->name}}">
                            @endif
                             <label >{{$permission->display_name}}</label>
                        </div>
                    </div>
                @endif

            @endforeach

        </div>
    {!! Form::submit('Submit', array('class' => 'btn btn-info'))!!}
    {!! link_to_route('roles.index','Cancel',null, array('class' => 'btn btn-danger'))!!}


    {!! Form::close() !!}

 {{--</div>--}}

@stop
@section('js_section')
    <script src="{{ asset('assets/ncdb/js/role_permission/role_permission_init.js') }}"></script>
@stop