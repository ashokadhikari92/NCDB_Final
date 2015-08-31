@extends('layouts1.master')
@section('content')

        <ul class="breadcrumb">
            <li>
                <span class="glyphicon glyphicon-baby-formula"></span>
                <a href="#">Birth Registration</a>
            </li>
            <li><a href="#">Home</a></li>
        </ul>

        <div class="register-doses"><a href="#"><button class="btn btn-primary"><span class="glyphicon glyphicon-new-window"></span> New Registration</button></a>
        <a href="#"><button class="btn btn-primary pull-right">Download <span class="glyphicon glyphicon-download"></span></button></a></div>

      <div class="panel panel-default">
      <div class="panel-body">
          <table class="table table-responsive table-striped" id="datatable-table">
          <thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>District</th>
            <th>Country</th>
          </thead>
          <tbody>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ashok</td>
               <td>Adhikari</td>
               <td>ashok@acd.edu.np</td>
               <td>Nawalparasi</td>
               <td>Country</td>
           </tr>

          </tbody>
      </table>

      <div class="brhb-cad">
          <div class="cal-male-female">
              <div class="left-total col-lg-3 ">
                  <tr><td>Total :</td><td>1500</td></tr>
              </div>
              <div class="middle-male col-lg-3 ">
                  <tr><td>Male :</td><td>800</td></tr>
              </div>
              <div class="right-female col-lg-3 ">
                  <tr> <td>Female :</td><td>700</td></tr>
              </div>
              <div class="others col-lg-3 ">
                  <tr> <td>Others :</td><td>10</td></tr>
              </div>
          </div>
          <div class="show-date">
              <div class="col-lg-4"><input type="text" class="form-control datepicker" placeholder="Select Date"  /></div>
              <div class="col-lg-4"><input type="text" class="form-control datepicker" placeholder="Select Date"  /></div>
          </div>
      </div>
      </div>
      </div>

@stop

@section('js_section')
    <script src="{{asset('assets/datatables/js/jquery.dataTables.min.js')}}"></script>
@stop