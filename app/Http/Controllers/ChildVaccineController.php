<?php namespace App\Http\Controllers;

use App\Helper\NCDBHelper;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateChildVaccineRequest;
use Illuminate\Http\Request;
use Repo\Repositories\ChildVaccine\ChildVaccineInterface as ChildVaccine;
use Repo\Repositories\BirthDetail\BirthDetailInterface as Child;
use Repo\Repositories\Address\AddressInterface as Location;

class ChildVaccineController extends Controller {

    /**
     * @var ChildVaccine
     */
    protected $child_vaccine;

    protected $child;

	/**
	 * @param ChildVaccine $child_vaccine
	 * @param Child $child
	 */
    function __construct(ChildVaccine $child_vaccine,Child $child)
    {
        $this->child_vaccine = $child_vaccine;

        $this->child = $child;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('vaccination.child_vaccines.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vaccination.vaccine_program.index');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateChildVaccineRequest $request
     * @return Response
     */
	public function store(CreateChildVaccineRequest $request)
	{
		$input = $request->all();

        $result = $this->child_vaccine->store($input);

        return redirect('child_vaccines')->with('result',$result);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$child_vaccine = $this->child_vaccine->findById($id);

        return view('vaccination.child_vaccines.show')->with('data',$child_vaccine);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$child_vaccine = $this->child_vaccine->findById($id);

        return view('vaccination.child_vaccines.edit')->with('data',$child_vaccine);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param CreateChildVaccineRequest $request
     * @return Response
     */
	public function update($id,CreateChildVaccineRequest $request)
	{
		$input = $request->all();

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

    /**
     * Gives the all the record
     */
    public function getAllChildVaccines()
    {
        return $this->child_vaccine->findAll();
    }

    public function loadChild(Location $location,$id,NCDBHelper $helper)
    {
        $child = $this->child->getChildByRegistrationId($id);

		$child['age'] = $helper->calculateAge($child->brth_birth_date_ad);

        $child_address = $location->getFullAddress($child->brth_birth_address);

        return view('vaccination.vaccine_program.index')->with('child',$child)->with('address',$child_address);
    }

}
