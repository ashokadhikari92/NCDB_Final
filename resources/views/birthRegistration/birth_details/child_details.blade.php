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
                    <tr><td class="bold">Name : </td><td>Madhu Sudhan</td></tr>
                    <tr><td class="bold">DOB : </td><td>1996/04/18</td></tr>

                    <tr><td class="bold">Father : </td><td>Chetan Subedi</td></tr>
                    <tr><td class="bold">Mother : </td><td>Apshara Subedi</td></tr>
                    <tr><td class="bold">DOB : </td><td>2015/01/23</td></tr>

                    <tr><td class="bold">Handicap :</td><td>No No i m alright</td></tr>
                    <tr><td class="bold">Age : </td><td>15</td></tr>
                    </tbody>
                </table>
                <div class="view-certificate">
                    <button class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span> View Certificate</button>
                </div>
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
                <div class="tab-content ">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="col-md-12 text-bold-large border-for-bottom">
                            <div class="col-md-6">
                                <tr><td>First Name : </td><td>Madhu Sudhan</td></tr><br>
                                <tr><td>DOB : </td><td>2015/03/12</td></tr><br>
                                <tr><td>Birth Place : </td><td>Malayasia</td></tr>
                            </div>
                            <div class="col-md-6">
                                <tr><td>Last Name : </td><td>Subedi</td></tr><br>
                                <tr><td>DOB : </td><td>2015/03/12</td></tr>
                            </div>
                        </div>

                        <div class="col-md-12 text-bold-large last-text">
                            <div class="col-md-6">
                                <tr><td>weight : </td><td>2.5 kg</td></tr>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <div class="col-md-12 text-bold-large border-for-bottom">
                            <div class="col-md-6">
                                <tr><td>First Name : </td><td>Gobber</td></tr><br>
                                <tr><td>Occuption : </td><td>is Back</td></tr><br>
                                <tr><td>Citizenship : </td><td>Nepali</td></tr><br>
                                <tr><td>Native Language : </td><td>Newari</td></tr>
                            </div>
                            <div class="col-md-6">
                                <tr><td>Last Name : </td><td>is Back</td></tr><br>
                                <tr><td>Education level : </td><td>S.L.C fail</td></tr><br>
                                <tr><td>Citizenship dist. : </td><td> Nawalparasi</td></tr><br>
                                <tr><td>Religion : </td><td>Hindu</td></tr>
                            </div>
                        </div>
                        <div class="col-md-12 text-bold-large last-text">
                            <div class="col-md-6">
                                <tr><td>Zone : </td><td>Lumbini</td></tr><br>
                                <tr><td>VDC/munciplity : </td><td>Kawasoti</td></tr><br>
                            </div>
                            <div class="col-md-6">
                                <tr><td>District : </td><td>Nawalparasi</td></tr><br>
                                <tr><td>Ward No : </td><td>6</td></tr>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                        <div class="col-md-12 text-bold-large border-for-bottom">
                            <div class="col-md-6">
                                <tr><td>First Name : </td><td>Mother</td></tr><br>
                                <tr><td>Occuption : </td><td>Office staff</td></tr><br>
                                <tr><td>Citizenship : </td><td>Nepali</td></tr><br>
                                <tr><td>Native Language : </td><td>Nepali</td></tr>
                            </div>
                            <div class="col-md-6">
                                <tr><td>Last Name : </td><td>Maharjan</td></tr><br>
                                <tr><td>Education level : </td><td>4 pass</td></tr><br>
                                <tr><td>Citizenship dist. : </td><td> Sunsari</td></tr><br>
                                <tr><td>Religion : </td><td>Muslim</td></tr>
                            </div>
                        </div>
                        <div class="col-md-12 text-bold-large last-text">
                            <div class="col-md-6">
                                <tr><td>Zone : </td><td>Sagarmatha</td></tr><br>
                                <tr><td>VDC/munciplity : </td><td>Devchuli</td></tr><br>
                            </div>
                            <div class="col-md-6">
                                <tr><td>District : </td><td>Tahnau</td></tr><br>
                                <tr><td>Ward No : </td><td>10</td></tr>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="tab4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12 text-bold-large">
                                    <div class="col-md-6">
                                        <tr><td>Vaccine Name : </td><td>Vaccine1</td></tr><br>
                                        <tr><td>Dose no : </td><td>first dose</td></tr><br>
                                        <tr><td>Address : </td><td>Kawasoti Nawalparasi</td></tr><br>
                                        <tr><td>Place : </td><td>First date place</td></tr>
                                    </div>
                                    <div class="col-md-6">
                                        <tr><td>Date : </td><td>2015/05/02</td></tr><br>
                                        <tr><td>Validator : </td><td>Ashok Adhikari</td></tr><br>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12 text-bold-large">
                                    <div class="col-md-6">
                                        <tr><td>Vaccine Name : </td><td>Vaccine1</td></tr><br>
                                        <tr><td>Dose no : </td><td>first dose</td></tr><br>
                                        <tr><td>Address : </td><td>Kawasoti Nawalparasi</td></tr><br>
                                        <tr><td>Place : </td><td>First date place</td></tr>
                                    </div>
                                    <div class="col-md-6">
                                        <tr><td>Date : </td><td>2015/05/02</td></tr><br>
                                        <tr><td>Validator : </td><td>Ashok Adhikari</td></tr><br>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop