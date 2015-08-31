@extends('layouts1.master')
@section('content')
    <ul class="breadcrumb">
        <li>
            <span class="glyphicon glyphicon-baby-formula"></span>
            <a href="#">Birth Registration</a>
        </li>
        <li><a href="#">Show</a></li>
    </ul>


    <div class="summery-part">
        <div class="panel panel-default">
            <div class="panel-heading heading-color">
                <div class="panel-title title-color"><ul id="tabs" class="nav nav-pills" data-tabs="tabs">
                        <li><span class="glyphicon glyphicon-align-justify"></span> Summery</li>
                    </ul></div>
            </div>
            <div class="panel-body">

                <table class="table table-hover">
                    <tbody>
                    <tr><td class="bold">Name : </td><td>{!!$child->brth_first_name!!}{!!$child->brth_last_name!!}</td></tr>
                    <tr><td class="bold">DOB : </td><td>{!!$child->brth_birth_date_bs!!} B.S</td></tr>
                    <tr><td class="bold">DOB : </td><td>{!!$child->brth_birth_date_ad!!} A.D</td></tr>
                    <tr><td class="bold">Father : </td><td>{!!$father['prnt_first_name']!!}{!!" ".$father['prnt_last_name']!!}</td></tr>
                    <tr><td class="bold">Mother : </td><td>{!!$mother['prnt_first_name']!!}{!!" ".$mother['prnt_last_name']!!}</td></tr>
                    <tr><td class="bold">Handicap :</td><td>{!!$child->brth_handicap_type!!}</td></tr>
                    <tr><td class="bold">Age : </td><td>{!!$child->age !!}</td></tr>
                    </tbody>
                </table>
              </div>
            <div class="view-certificate" style="margin-left: 13px; margin-bottom: 10px;">
                {!! link_to_route('view.certificate','Birth Certificate', array($child->brth_id), array('class' => 'btn btn-success glyphicon glyphicon-eye-open'))!!}
            </div>
        </div>
    </div>


    <div class="information-part">
        <div class="panel panel-default">
            <div class="panel-heading heading-color reduce-padding-color ">
                <div class="panel-title title-color ">
                    <ul id="tabs" class="nav nav-pills " data-tabs="tabs">
                        <li><a href="#tab1" data-toggle="tab" class="white-color active"><span class="glyphicon glyphicon-phone-alt"></span> Profile</a> </li>
                        <li><a href="#tab2" data-toggle="tab" class="white-color"><span class="glyphicon glyphicon-user"></span> Father</a> </li>
                        <li><a href="#tab3" data-toggle="tab" class="white-color"><span class="glyphicon glyphicon-queen"></span> Mother</a> </li>
                        <li><a href="#tab4" data-toggle="tab" class="white-color"><span class="glyphicon glyphicon-hd-video"></span> Vaccines</a> </li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="col-md-12 border-for-bottom">
                            <div class="col-md-6">
                                <table class="table table-hover">
                                <tbody>
                                    <tr><td>First Name : </td><td>{!!$child->brth_first_name!!}</td></tr>
                                    <tr><td>DOB : </td><td>{!!$child->brth_birth_date_bs!!} B.S</td></tr>
                                    <tr><td>Gender : </td><td>{!!$child->brth_gender!!}</td></tr>
                                    <tr><td>Birth Place : </td><td>{!!$child->brth_birth_place!!}</td></tr>
                                </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-hover">
                                <tbody>
                                    <tr><td>Last Name : </td><td>{!!$child->brth_last_name!!}</td></tr>
                                    <tr><td>DOB : </td><td>{!!$child->brth_birth_date_ad!!} A.D</td></tr>
                                    <tr><td>Handicap : </td><td>{!!$child->brth_handicap_type!!}</td></tr>
                                    <tr><td>Birth Helper : </td><td>{!!$child->brth_birth_helper!!}</td></tr>
                                </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-12 last-text">
                            <div class="col-md-6">
                                <table class="table table-hover">
                                <tbody>
                                    <tr><td>Zone : </td><td>{!! $address['zone']!!}</td></tr>
                                    <tr><td>VDC : </td><td>{!! $address['vdc']!!}</td></tr>
                                </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr><td>District : </td><td>{!! $address['district']!!}</td></tr>
                                    <tr><td>Ward No : </td><td>{!! $address['ward_no']!!}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <div class="col-md-12 border-for-bottom">
                            <div class="col-md-6">
                                <table class="table table-hover">
                                <tbody>
                                    <tr><td>First Name : </td><td>{!!$father['prnt_first_name']!!}</td></tr>
                                    <tr><td>Occuption : </td><td>{!!$father['prnt_occupation']!!}</td></tr>
                                    <tr><td>Citizenship No : </td><td>{!!$father['prnt_citizenship_no']!!}</td></tr>
                                    <tr><td>Native Language : </td><td>{!!$father['prnt_native_language']!!}</td></tr>
                                </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-hover">
                                <tbody>
                                    <tr><td>Last Name : </td><td>{!!$father['prnt_last_name']!!}</td></tr>
                                    <tr><td>Education level : </td><td>{!!$father['prnt_education_level']!!}</td></tr>
                                    <tr><td>Citizenship dist. : </td><td>{!!$father['prnt_citizenship_issued_district']!!}</td></tr>
                                    <tr><td>Religion : </td><td>{!!$father['prnt_religion']!!}</td></tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 last-text">
                            <div class="col-md-6">
                                <table class="table table-hover">
                                <tbody>
                                    <tr><td>Zone : </td><td>{!!$father['address']['zone']!!}</td></tr>
                                    <tr><td>VDC/munciplity : </td><td>{!!$father['address']['vdc']!!}</td></tr>
                                </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-hover">
                                <tbody>
                                    <tr><td>District : </td><td>{!!$father['address']['district']!!}</td></tr>
                                    <tr><td>Ward No : </td><td>{!!$father['address']['ward_no']!!}</td></tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                        <div class="col-md-12 border-for-bottom">
                            <div class="col-md-6">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr><td>First Name : </td><td>{!!$mother['prnt_first_name']!!}</td></tr>
                                    <tr><td>Occuption : </td><td>{!!$mother['prnt_occupation']!!}</td></tr>
                                    <tr><td>Citizenship No : </td><td>{!!$mother['prnt_citizenship_no']!!}</td></tr>
                                    <tr><td>Native Language : </td><td>{!!$mother['prnt_native_language']!!}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr><td>Last Name : </td><td>{!!$mother['prnt_last_name']!!}</td></tr>
                                    <tr><td>Education level : </td><td>{!!$mother['prnt_education_level']!!}</td></tr>
                                    <tr><td>Citizenship dist. : </td><td>{!!$mother['prnt_citizenship_issued_district']!!}</td></tr>
                                    <tr><td>Religion : </td><td>{!!$mother['prnt_religion']!!}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 last-text">
                            <div class="col-md-6">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr><td>Zone : </td><td>{!!$mother['address']['zone']!!}</td></tr>
                                    <tr><td>VDC/munciplity : </td><td>{!!$mother['address']['vdc']!!}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr><td>District : </td><td>{!!$mother['address']['district']!!}</td></tr>
                                    <tr><td>Ward No : </td><td>{!!$mother['address']['ward_no']!!}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="tab4">
                        @foreach($vaccines as $vaccine)
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="col-md-12 ">
                                        <div class="col-md-6">
                                            <table class="table table-hover">
                                                <tbody>
                                                <tr><td>Vaccine Name : </td><td>{{$vaccine->chld_vcin_vaccine_id}}</td></tr>
                                                <tr><td>Dose no : </td><td>{{$vaccine->chld_vcin_dose_no}}</td></tr>
                                                <tr><td>Address : </td><td>{{$vaccine->chld_vcin_address['full_address']}}</td></tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-hover">
                                                <tbody>
                                                <tr><td>Date : </td><td>{{$vaccine->chld_vcin_date}}</td></tr>
                                                <tr><td>Vacillator : </td><td>{{$vaccine->chld_vcin_vaccillator_id}}</td></tr>
                                                <tr><td>Place : </td><td>{{$vaccine->chld_vcin_place}}</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

@stop