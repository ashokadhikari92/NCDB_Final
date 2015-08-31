@extends('layouts1.configuration.master')

@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">User</a>
        </li>
        <li><a href="#">Assign Location</a></li>
    </ul>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @include('errors.error')
                    <div class="panel-heading">Assign location</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-4 control-label">User Name: {{$user->user_name}}</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">User Name: {{$user->user_role}}</label>
                        </div>

                        {!! Form::open(['method'=>'POST','route'=>['store.user.location',$user->id]]) !!}

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Zone</label>
                                <div class="col-md-6">
                                    <select name="office_zone" class="form-control" id="zone">
                                        <option disabled>Select Zone</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">District</label>
                                <div class="col-md-6">
                                    <select name="office_district" class="form-control" id="district">
                                        <option disabled>Select District</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">VDC/Municipality</label>
                                <div class="col-md-6">
                                    <select name="office_vdc" class="form-control" id="vdc">
                                        <option disabled>Select VDC</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Ward No.</label>
                                <div class="col-md-6">
                                    <select name="office_ward" class="form-control" id="ward_no">
                                        <option disabled>Select Ward No.</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Assign Location
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_section')
    <script src="{{ asset('assets/ncdb/js/user/users.js') }}"></script>
@stop
