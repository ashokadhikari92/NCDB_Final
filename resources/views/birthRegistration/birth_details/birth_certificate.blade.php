<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Birth registration</title>
    <link href="{{asset('assets/css/style-cert.css')}}" rel="stylesheet" type="text/css"/>
  </head>
 <body>

    <div id="whole-design">
      <!-- Start of header-------->
      <div class="header">
          <!--------Start of the Container ---->
          <div id="container">
               <!-- Start of left part of header ----->
              <div class="left-header logo">
               <img src="{{asset('assets/img/logo/nepal.png')}}"/>
              </div>
			  
              <!-----End of left part of header ------>
              <!------- Start of middle part of header header-------->
              <div class="middle-header title">
                  <p>Schedule-12<br/>
                     (Related with Rule 7)<br/>
                     Government of Nepal <br/>
                     Ministry of Aederal Affairs and Local Development<br/>
                      <b class="bold-text">Offiace of Local Registrar</b> <br/>
                      {{$child['birth_vdc']}}<br/>
                     {{$child['birth_district']}}<br/>
                      <b class="bold-text flat">Birth Registration Certificate</b>
                  </p>
				  
              </div>
			 
              <!------End of midle part of header-------->
              <div class="right-header logo-nepali">
               <img src="images/some.png" />
              </div>
          </div>
          <!------- End of the container -------->
      </div>
      <!--------- End of Header ----------->




      <div class="clear"></div>

    <!------ Start of the record-keep ---------->
   
      <div id="container">
         <div class="record-keep">
        <div class="left-record">
         <p><tr><td>Registration No:</td><td>{!!$child['registration'] !!}</td></tr><br/>
           <tr><td> {{--Family Record Form No:--}}</td><td></td></tr></p>
        </div>
        <div class="right-record">
        <p><tr><td>Date of Registration:</td><td>{!! $child['registered_date'] !!}</td></tr></p>
        </div>
      </div>
    </div>
    <!------- End of record keep-------->

      <div class="clear"></div>


     <div id="container">
     <div class="description">
      
        <p>
        This is to certify as per the birth register maintained at this office and the information provided by
        {!!$child['informer_name'] !!} in the information form of schedule2 that {!!$child['miss.mr']!!} {!!$child['child_name'] !!} , {!!$child['son_daughter'] !!} of Mr. {!! $child['father_name']!!} and Mrs. {!! $child['mother_name']!!}, {!!$child['g_son_daughter'] !!}
         of  {!! $child['grand_father']!!}, a resident of {!! $child['father_vdc']!!} ward no. {!! $child['father_ward_no']!!} {!! $child['father_district']!!} District , was born on {!! $child['birth_date_bs']!!} (BS) {{--{!!$child['birth_date_ad']!!}(A.D.)--}}
        at {!!$child['birth_address'] !!} .
        </p>
     </div>
    </div>

<!------ Start of the record-keep ---------->
   
        <div id="container">
         <div class="record-keep">
        <div class="left-record">
         <p>If citizenship certificate is issued :<br/>
            Citizenship Certificate No and District<br/>
           <tr><td>Father :</td><td>{!!$child['father_citizenship_no']!!} / </td><td>{!!$child['father_citizenship_issued_district'] !!}</td></tr><br>
           <tr><td>Mother :</td><td>{!!$child['mother_citizenship_no']!!} / </td><td>{!!$child['mother_citizenship_issued_district'] !!}</td></tr></p>
        </div>
        <div class="right-record">
        <p>Local Registraters : {!! $child['registar'][0]->user_name !!}<br/>
        <tr><td>Date of Registration:</td><td>{!! $child['registered_date'] !!}</td></tr></p>
        </div>
      </div>
    </div>
    <!------- End of container-------->
    </div>




    </div>
  </body>
</html>