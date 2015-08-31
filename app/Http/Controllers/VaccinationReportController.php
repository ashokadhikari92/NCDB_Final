<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VaccinationReportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return view('reports.vaccination.index');
		return view('reports.vaccination.vaccination_main');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getData()
	{
		$data = 'State,Bacillus Calmette-Guerin,Pentavalente,Polio injection,Polio Drop,Measles Rubella Vaccine,Japanese Encephalitis vaccine
				Mechi,2704659,4499890,2159981,3853788,10604510,8819342,4114496
				Koshi,2027307,3277946,1420518,2454721,7017731,5656528,2472223
				Sagarmatha,1208495,2141490,1058031,1999120,5355235,5120254,2607672
				Janakpur,1140516,1938695,925060,1607297,4782119,4746856,3187797
				Bagmati,894368,1558919,725973,1311479,3596343,3239173,1575308
				Narayani,2704659,4499890,2159981,3853788,10604510,8819342,4114496
				Gandaki,2027307,3277946,1420518,2454721,7017731,5656528,2472223
				Lumbini,1208495,2141490,1058031,1999120,5355235,5120254,2607672
				Dhulagiri,1140516,1938695,925060,1607297,4782119,4746856,3187797
				Rapti,894368,1558919,725973,1311479,3596343,3239173,1575308
				Karnali,1140516,1938695,925060,1607297,4782119,4746856,3187797
				Bheri,894368,1558919,725973,1311479,3596343,3239173,1575308
				Seti,737462,1345341,679201,1203944,3157759,3414001,1910571
				Mahakali,1140516,1938695,925060,1607297,4782119,4746856,3187797';
		return $data;
	}

	public function getDataPieChart()
	{
		$data = 'age,population
				Bacillus,2704659
				Calmette-Guerin,4499890
				Pentavalente,2159981
				Polio injection,3853788
				Polio Drop,14106543
				Measles Rubella Vaccine,8819342
				Japanese Encephalitis vaccine,612463';
		return $data;
	}

	public function getPieChart()
	{
		return view('reports.vaccination.pie_chart');
	}

}
