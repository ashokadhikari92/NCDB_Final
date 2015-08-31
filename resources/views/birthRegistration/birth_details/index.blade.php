@extends('layouts1.master')

@section('content')

    <div class="col-md-10">
      			<div class="content-box-large">
      				<div class="panel-heading">
      				@include('errors.error')
      				<div class="panel-title col-md-12">
                         <div class="row">
                            <div class="col-md-6">
                                <a href="{!! route('birth_details.create') !!}"><button class="btn btn-success">New Birth Registration<i class="icon-plus icon-white"></i></button></a>
                            </div>

                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                 <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">Print</a></li>
                                     <li><a href="#">Save as PDF</a></li>
                                     <li><a href="#">Export to Excel</a></li>
                                 </ul>
                             </div>
                            </div>

                            </div>
                        </div>
      				</div>

    				 <div class="table-toolbar">

                    </div>
      				<div class="panel-body">
      					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
    						<thead>
    							<tr>
    							    <th>क्र.सं.</th>
    								<th>पुरा नाम </th>
    								<th>जन्म मिती </th>
    								<th>लिङ्ग </th>
    								<th>बाबु </th>
    								<th>अामा </th>
    								<th>Details</th>
    							</tr>
    						</thead>
    						<tbody>
    							<tr class="odd gradeX">
    								<td>१</td>
    								<td>अषिम मानन्धर</td>
    								<td>२०५०-०३-१३</td>
    								<td class="center"> पुरूष</td>
    								<td class="center">अषिमको बाबा</td>
    								<td class="center">अषिमको अामा </td>
    								<td><a href="#"><i class="glyphicon glyphicon-saved"></i></a></td>
    							</tr>
                                <tr class="odd gradeX">
    								<td>२</td>
    								<td>अशोक अधिकारी</td>
    								<td>२०४९-०२-१९</td>
    								<td class="center"> पुरूष</td>
    								<td class="center">अशोकको वुबा </td>
    								<td class="center">अशोकको अामा </td>
    								<td><a href="#"><i class="glyphicon glyphicon-saved"></i></a></td>
    							</tr>
                                <tr class="odd gradeX">
    								<td>३</td>
    								<td>दिनेश शमा </td>
    								<td>२०५०-११-२३</td>
    								<td class="center"> पुरूष</td>
    								<td class="center">दिनेशको बाबा </td>
    								<td class="center">दिनेशको अामा </td>
    								<td><a href="#"><i class="glyphicon glyphicon-saved"></i></a></td>
    							</tr>
                                <tr class="odd gradeX">
    								<td>४</td>
    								<td> सन्तोष ढुङगाना</td>
    								<td>२०४९-०३-०४</td>
    								<td class="center"> पुरूष</td>
    								<td class="center">सन्तोषको वुबा </td>
    								<td class="center">सन्तोषको ममी</td>
    								<td><a href="#"><i class="glyphicon glyphicon-saved"></i></a></td>
    							</tr>
                                <tr class="odd gradeX">
    								<td>५</td>
    								<td>दिपु श्रेषठ</td>
    								<td>२०५०-०८-०२</td>
    								<td class="center">महिला </td>
    								<td class="center">दिपुको वुबा</td>
    								<td class="center">दिपुको ममी </td>
    								<td><a href="#"><i class="glyphicon glyphicon-saved"></i></a></td>
    							</tr>
    						</tbody>
    					</table>
      				</div>
      			</div>
    </div>

@stop

@section('js_section')
 <script src="{{asset('assets/datatables/js/jquery.dataTables.min.js')}}"></script>
@stop