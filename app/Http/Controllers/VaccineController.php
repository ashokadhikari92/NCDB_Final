<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateVaccineRequest;
use Repo\Repositories\Vaccine\VaccineInterface;

use Illuminate\Http\Request;

class
VaccineController extends Controller {

    protected $vaccine;

    function __construct(VaccineInterface $vaccine)
    {
        $this->vaccine = $vaccine;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('vaccination.vaccines.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vaccination.vaccines.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateVaccineRequest $request
     * @return Response
     */
	public function store(CreateVaccineRequest $request)
	{
        $result = $this->vaccine->storeVaccine($request->all());

        return redirect('vaccines')->with('message',$result['message']);

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
		$vaccine = $this->vaccine->getVaccineById($id);

        return view('vaccination.vaccines.edit')->with('vaccine',$vaccine);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param CreateVaccineRequest $request
     * @param  int $id
     * @return Response
     */
	public function update(CreateVaccineRequest $request,$id)
	{
		$result = $this->vaccine->updateVaccine($request->all(),$id);

        return redirect('vaccines')->with('message',$result['message']);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$result = $this->vaccine->delete($id);

		return redirect('vaccines')->with('message',$result['message']);
	}

    /**
     * Return all the vaccine details
     *
     * @return mixed
     */
    public function getAllVaccines()
    {
        return $this->vaccine->getAllVaccines();
    }

	/**
	 * Returns the vaccine details with current dose
	 *
	 * @param $vaccine
	 * @param $child
	 * @return mixed
     */
	public function getVaccineWithWhichDose($vaccine,$child)
	{
		return $this->vaccine->getVaccineWithWhichDose($vaccine,$child);
	}

}
