<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Models\VaccineDose;

class VaccineDoseController extends Controller {

	/**
	 * @var VaccineDose
     */
	private $vaccineDose;

	/**
	 * @param VaccineDose $vaccineDose
     */
	function __construct(VaccineDose $vaccineDose)
	{
		$this->vaccineDose = $vaccineDose;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vaccination.vaccine_doses.create')
			->with('dose_no',2)
			->with('vaccine_name','DPD')
			;
	}

	public function assignDoseInterval($id)
	{
		$vaccine = Vaccine::find($id);
		$noOfDose = \DB::table('vaccine_doses')->where('dose_vaccine_id',$id)->get();

		if($vaccine->vcin_dose == count($noOfDose))
		{
			return view('vaccination.vaccine_doses.show')->with('vaccine_doses',$noOfDose);
			//return redirect('vaccines')->with('message','Vaccine dose intervals are already assigned.');
		}

		return view('vaccination.vaccine_doses.create')
			->with('vaccine',$vaccine);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Requests\VaccineDoseRequest $request
	 * @return Response
	 */
	public function store(Requests\VaccineDoseRequest $request)
	{
		$input = $request->all();
		$vaccine_id = $input['vaccine_id'];
		for($i = 0; $i<count($input['dose_no']);$i++)
		{
			$data['dose_vaccine_id'] = $vaccine_id;
			$data['dose_vaccine_dose_no'] = $input['dose_no'][$i];
			$data['years'] = $input['years'][$i];
			$data['months'] = $input['months'][$i];
			$data['days'] = $input['days'][$i];
			$data['dose_interval'] = $input['years'][$i]*365+$input['months'][$i]*30+$input['days'][$i];
			$data['created_by'] = \Auth::User()->id;
			$data['updated_by'] = \Auth::User()->id;

			$this->vaccineDose->create($data);
		}

		return redirect('vaccines')->with('message','Vaccine dose interval is assigned.');
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

}
