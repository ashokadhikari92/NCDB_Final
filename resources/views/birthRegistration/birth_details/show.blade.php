@extends('layouts1.master')

@section('content')

    <div class="px-margin-top"></div>

               <div class="col-lg-3 col-sm-4 small-border back-white">
                   <div class="px-margin-top"></div>

                          <div class="padding-left-right">
                              {{--<img src="images/image.jpg" height="170px" width="170px" />--}}
                              <span class="center-block"><h2>Summary</h2></span>
                              <h2><b>{!!$child->brth_first_name!!}{!!" ".$child->brth_last_name!!}</b></h2>
                              {{--<h3>{!!$child->brth_birth_date_bs!!} B.S</h3>--}}

                              <table class="table table-striped ">
                                  <tbody>
                                     <tr><td>Born On: </td><td>{!!$child->brth_birth_date_bs." "!!}B.S</td></tr>
                                     <tr><td>View :</td><td> {!! link_to_route('view.certificate','Birth Certificate', array($child->brth_id), array('class' => 'btn btn-warning'))!!} </td></tr>
                                  </tbody>
                              </table>
                          </div>

               </div>

               <div class="col-lg-9 col-sm-8">
                   <!------ Tab Navigation---->
                   <div class="green-back">
                       <ul class="nav nav-tabs "  data-tabs="tabs" id="my-tabs" >
                           <li><a href="#tab1"  class="white-text active">Profile</a> </li>
                           <li><a href="#tab2"  class="white-text">Parents</a> </li>
                           <li><a href="#tab3"  class="white-text">Vaccination</a> </li>
                           <li><a href="#tab4"  class="white-text">Education</a> </li>
                           <li><a href="#tab5"  class="white-text">Health</a> </li>
                       </ul>
                   </div>
                   <!--- Tab sections -->
                   <div class="tab-content back-white">

                       <div class="tab-pane active" id="tab1">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="col-md-10 col-xs-22"><h2><i class="fa fa-user fa-1x"> </i> About</h2></div>

                                   <div class="col-md-2 col-xs-2">

                                       {!! link_to_route('birth_details.edit','Edit', array($child->brth_id), array('class' => 'btn btn-warning margin-top'))!!}
                                   </div>
                               </div>
                               <div class="col-md-12 col-xs-24">
                                   <div class="col-md-6 pull-left col-xs-12">
                                        <table class="table table-hover">
                                            <tbody>
                                            <tr><td class="bold">First Name :</td><td>{!!$child->brth_first_name!!}</td></tr>
                                            <tr><td class="bold">Full Name :</td><td>{!!$child->brth_full_name_nepali !!}</td></tr>
                                            <tr><td class="bold">Birth Place :</td><td>{{$child->brth_birth_place}}</td></tr>
                                            <tr><td class="bold">Gender :</td><td>{!!$child->brth_gender !!}</td></tr>
                                            <tr><td class="bold">Birth Type :</td><td>{{$child->brth_birth_type}}</td></tr>
                                            <tr><td class="bold">Registered By :</td><td>{{$child->registeredBy->email}}</td></tr>
                                            </tbody>
                                        </table>
                                   </div>
                                   <div class="col-md-6 col-xs-12">
                                       <table class="table">
                                           <tbody>
                                           <tr><td class="bold">Last Name :</td><td>{!!$child->brth_last_name !!}</td></tr>
                                           <tr><td class="bold">Registration Id:</td><td>{{$child->brth_registration_id}}</td></tr>
                                           <tr><td class="bold">Birth Helper:</td><td>{{$child->brth_birth_helper}}</td></tr>
                                           <tr><td class="bold">Handicap :</td><td>{{$child->brth_handicap_type}}</td></tr>
                                           <tr><td class="bold">Informed By :</td><td>{{$child->brth_informed_by}}</td></tr>
                                           <tr><td class="bold">Registered Date :</td><td>{{$child->brth_registered_date}}</td></tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>


                       </div>

                       </div>{{-- tab 1 ends--}}
                       <div class="tab-pane fade" id="tab2">
                             <div class="row">

                               <div class="col-md-12 col-xs-24">
                                   <div class="col-md-6 pull-left col-xs-12">
                                   <div class="col-md-10 col-xs-22"><h2><i class="fa fa-user fa-1x"> </i> Father</h2></div>
                                          <div class="col-md-2 col-xs-2">
                                              {!! link_to_route('parents.edit','Edit', array($father['prnt_id']), array('class' => 'btn btn-warning margin-top'))!!}
                                          </div>
                                        <table class="table table-hover">
                                            <tbody>
                                            <tr><td class="bold">Full Name:</td><td>{!!$father['prnt_first_name']!!}{!!" ".$father['prnt_last_name']!!}</td></tr>
                                            <tr><td class="bold">Full Name(Devnagari):</td><td><font face="Nepali">{!!$father['prnt_full_name_nepali']!!}</font></td></tr>
                                            <br>
                                            <tr><td class="bold">Zone:</td><td>{!!$father['address']['zone']!!}</td></tr>
                                            <tr><td class="bold">District:</td><td>{!!$father['address']['district']!!}</td></tr>
                                            <tr><td class="bold">VDC/MC:</td><td>{!!$father['address']['vdc']!!}</td></tr>
                                            <tr><td class="bold">Ward No:</td><td>{!!$father['address']['ward_no']!!}</td></tr>
                                            <br>
                                            <tr><td class="bold">Citizenship No:</td><td>{!!$father['prnt_citizenship_no']!!}</td></tr>
                                            <tr><td class="bold">Citizenship Issued District:</td><td>{!!$father['prnt_citizenship_issued_district']!!}</td></tr>
                                            </tbody>
                                        </table>
                                   </div>
                                   <div class="col-md-6 col-xs-12">
                                   <div class="col-md-10 col-xs-22"><h2><i class="fa fa-user fa-1x"> </i> Mother</h2></div>
                                        <div class="col-md-2 col-xs-2">
                                           {!! link_to_route('parents.edit','Edit', array($mother['prnt_id']), array('class' => 'btn btn-warning margin-top'))!!}
                                         </div>
                                        <table class="table table-hover">
                                            <tbody>
                                            <tr><td class="bold">Full Name:</td><td>{!!$mother['prnt_first_name']!!}{!!" ".$mother['prnt_last_name']!!}</td></tr>
                                            <tr><td class="bold">Full Name(Devnagari):</td><td><font face="Nepali">{!!$mother['prnt_full_name_nepali']!!}</font></td></tr>
                                            <br>
                                            <tr><td class="bold">Zone:</td><td>{!!$mother['address']['zone']!!}</td></tr>
                                            <tr><td class="bold">District:</td><td>{!!$mother['address']['district']!!}</td></tr>
                                            <tr><td class="bold">VDC/MC:</td><td>{!!$mother['address']['vdc']!!}</td></tr>
                                            <tr><td class="bold">Ward No:</td><td>{!!$mother['address']['ward_no']!!}</td></tr>
                                            <br>
                                            <tr><td class="bold">Citizenship No:</td><td>{!!$mother['prnt_citizenship_no']!!}</td></tr>
                                            <tr><td class="bold">Citizenship Issued District:</td><td>{!!$mother['prnt_citizenship_issued_district']!!}</td></tr>
                                            </tbody>
                                        </table>
                                   </div>
                               </div>


                             </div>
                       </div> {{--tab 2 ends--}}
                       <div class="tab-pane fade" id="tab3">

                       </div>{{-- tab 3 ends--}}
                       <div class="tab-pane fade" id="tab4">
                        <div class="col-md-6">
                           <h2><i class="glyphicon glyphicon-education"></i> Education</h2>
                           <table class="table table-hover">

                           </table>
                       </div>
                   </div>{{-- tab 4 ends--}}
                   <div class="tab-pane fade" id="tab5">

                   </div>{{-- tab 5 ends--}}

               </div>
           </div>


@stop

@section('js_section')
    <script type="text/javascript">

    $( '#my-tabs a' ).click( function ( e ) {
         e.preventDefault();
        $( this ).tab( 'show' );
     } );

    </script>
@stop