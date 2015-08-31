<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('test/{id}/{id2}',function($id1,$id2)
{
    return "Hello id1 =".$id1."and Id 2 : ".$id2;
});*/
//Route::get('/', 'WelcomeController@index');
Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['middleware'=>['auth']],function(){


    Route::get('configure',function(){
        return view('layouts1.configuration.index');
    });
    Route::get('reports',function(){
        return view('layouts1.reports.index');
    });

/* ------------------------------------------------------------------------
             Birth Details
--------------------------------------------------------------------------*/
    Route::resource('birth_details','BirthDetailController');
    Route::get('delete/birth_details/{id}','BirthDetailController@destroy');
    Route::get('birth/details',array('as'=>'birth/details','uses'=>'BirthDetailController@getAllData'));
    Route::get('get/child/location/{id}','BirthDetailController@getChildLocation');

    Route::get('view/certificate/{id}',['as'=>'view.certificate','uses'=>'BirthDetailController@viewBirthCertificate']);

    Route::resource('parents','ParentController');
    Route::get('parent/details','ParentController@getDetails');

/* ------------------------------------------------------------------------
            Vaccination
--------------------------------------------------------------------------*/
    Route::resource('child_vaccines','ChildVaccineController');
    Route::get('delete/child/vaccine/{id}','ChildVaccineController@destroy');
    Route::get('child/vaccines/details',array('as'=>'child/vaccines/details','uses'=>'ChildVaccineController@getAllChildVaccines'));

    Route::resource('vaccination/program','VaccinationProgramController');
    Route::get('provide/vaccine/{vid}/{cid}',['as'=>'provide.vaccine','uses'=>'VaccinationProgramController@provideVaccine']);

    Route::get('vaccination/program/vaccine/list/{id}',['as'=>'vaccination/program/vaccine/list','uses'=>'VaccinationProgramController@vaccineList']);
    Route::get('/load/child/detail/{id}','ChildVaccineController@loadChild');
    Route::resource('vaccine_doses','VaccineDoseController');

    Route::get('vaccines/dose/interval/{id}','VaccineDoseController@assignDoseInterval');

    Route::resource('vaccines','VaccineController');
    Route::get('delete/vaccine/{id}','VaccineController@destroy');
    Route::get('getAll/vaccines','VaccineController@getAllVaccines');


/* ------------------------------------------------------------------------
            Location (Address)
--------------------------------------------------------------------------*/
    Route::get('location/district/{id}','LocationController@getDistrict');
    Route::get('location/zone','LocationController@getZone');

/* -------------------------------------------------------------------------------
 *  User management Module  Routes
 * -------------------------------------------------------------------------------*/
    Route::resource('users','UserController');
    Route::get('user/address','UserController@fullAddressOfTheUser');
    Route::get('user/details','UserController@getAll');

/* -------------------------------------------------------------------------------
 *  User management Module  Routes
 * ------------------------------------------------------------------------------- */

    Route::resource('roles','RoleController');
    Route::get('/role/getAll',array(
        'as' => 'role.getAll',
        'uses' => 'RoleController@getAll'
    ));
    Route::get('/assign/permissions/{id}',array(
        'as' =>'assign.permissions',
        'uses' => 'RoleController@assignPermission'
    ));
    Route::get('assign/user/location/{id}',array(
        'as' => 'assign.user.location',
        'uses' => 'UserController@assignLocation'
    ));
    Route::post('store/user/location/{id}', array(
        'as' => 'store.user.location',
        'uses' => 'UserController@storeUserLocation'
    ));

/*------------------------------------------------------------------------------------
 *  Role and Permission management
 ------------------------------------------------------------------------------------*/

    Route::resource('role_permission','RolePermissionController');
    Route::get('getPermissions/{id}',array(
        'as' => 'getPermissions','
        uses' => 'RolePermissionController@getPermission'
    ));



    /* -------------------------------------------------------------------------------------------------------------
     * Report Routing
     ----------------------------------------------------------------------------------------------------------------*/
    Route::resource('/child/reports','BirthRegistrationReportController');
    Route::resource('/vaccination/reports','VaccinationReportController');

    Route::get('child/report/data','BirthRegistrationReportController@getData');
    Route::get('getData/child/pieChart','BirthRegistrationReportController@getDataPieChart');
    Route::get('child/pieChart','BirthRegistrationReportController@getPieChart');
    Route::get('vaccination/report/data','VaccinationReportController@getData');
    Route::get('getData/pieChart','VaccinationReportController@getDataPieChart');
    Route::get('vaccination/pieChart','VaccinationReportController@getPieChart');

    Route::get('birth/main/report',array(
        'as' => 'birth.main.report',
        'uses' => 'BirthRegistrationReportController@birthMainReport'
    ));

    });