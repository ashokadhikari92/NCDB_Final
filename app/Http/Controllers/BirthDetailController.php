<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UpdateBirthDetailRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Repo\Repositories\BirthDetail\BirthDetailInterface as BirthDetail;
use Repo\Repositories\Address\AddressInterface as Location;
use Repo\Repositories\ChildVaccine\ChildVaccineInterface;
use Repo\Repositories\ParentsDetail\ParentsDetailRepository as Parents;
use Illuminate\Validation\Validator;
use App\Helper\NCDBHelper;

class BirthDetailController extends Controller {

    protected $birth;

    protected $location;

    protected $parent;

    private $helper;

    private $childVaccine;

    function __construct(BirthDetail $birth,Location $location,Parents $parent, NCDBHelper $helper,ChildVaccineInterface $childVaccine)
    {
        $this->birth = $birth;

        $this->location = $location;

        $this->parent = $parent;

        $this->helper = $helper;

        $this->childVaccine = $childVaccine;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(\Entrust::can('birth-registration-index'))
        {
            return view('birthRegistration.birth_details.index2');
        }
        else{
            return abort(404,'You are not allowed');
        }

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        if(\Entrust::can('birth-registration-create'))
        {
            $district = $this->location->getLocationsByLocnType('District');//dd($district);

            $handicapTypes = $this->birth->getAllHandicapType();

            $castes = $this->birth->getAllCastes();

            $birthHelpers = $this->birth->getAllBirthHelpers();

            $birthPlaces = $this->birth->getAllBirthPlaces();

            $birthTypes = $this->helper->getBirthTypes();

            $countries = Country::all()->lists('name','name');

            return view('birthRegistration.birth_details.add_new')
                ->with('districts',$district)
                ->with('handicapType',$handicapTypes)
                ->with('birthHelpers',$birthHelpers)
                ->with('castes',$castes)
                ->with('birthPlaces',$birthPlaces)
                ->with('birthTypes',$birthTypes)
                ->with('countries',$countries);
        }
        else{
            return abort(404,'You are not allowed');
        }

	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CreateBirthDetailRequest $request
     * @return Response
     */
	public function store(Requests\CreateBirthDetailRequest $request)
	{
        if(\Entrust::can('birth-registration-create'))
        {
            $input = $request->all();

            $result = $this->birth->addChildDetails($input);

             return view('birthRegistration.birth_details.birth_certificate')->with('child',$result);

        }
        else{
            return abort(404,'You are not allowed');
        }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        if(\Entrust::can('birth-registration-show'))
        {
            $birth_detail = $this->birth->getChildById($id);

            $address = $this->location->getFullAddress($birth_detail['brth_birth_address']);

            $father_details = $this->parent->getParentByCitizenShipNo($birth_detail['brth_father']);

            $mother_details = $this->parent->getParentByCitizenShipNo($birth_detail['brth_mother']);

            $vaccineDetail = $this->childVaccine->getChildVaccineDetailByRegistrationId( $birth_detail['brth_registration_id']);


            return view('birthRegistration.birth_details.child-detail')
                ->with('child',$birth_detail)
                ->with('address',$address)
                ->with('father',$father_details->toArray())
                ->with('mother',$mother_details->toArray())
                ->with('vaccines',$vaccineDetail);
        }
        else{
            return abort(404,'You are not allowed');
        }

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        if(\Entrust::can('birth-registration-edit'))
        {
            $child = $this->birth->getChildById($id);

            return view('birthRegistration.birth_details.edit')->with('child',$child);
        }
        else{
            return abort(404,'You are not allowed');
        }
	}

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBirthDetailRequest $request
     * @param  int $id
     * @return Response
     */
	public function update(UpdateBirthDetailRequest $request,$id)
	{
        if(\Entrust::can('birth-registration-edit'))
        {
            $result = $this->birth->updateChild($request->all(),$id);

            return redirect('birth_details')->with('message',$result['message']);
        }
        else{
            return abort(404,'You are not allowed');
        }

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        if(\Entrust::can('birth-registration-delete'))
        {
            //
        }
        else{
            return abort(404,'You are not allowed');
        }
	}

    public function getAllData()
    {
        if(\Entrust::can('birth-registration-index'))
        {
            return $this->birth->getAllChildren();
        }
        else{
            return abort(404,'You are not allowed');
        }
    }

    public function getChildLocation($id)
    {

       $address = $this->birth->getChildLocation($id);

        return json_encode($address);
    }

    public function viewBirthCertificate($id)
    {
        if(\Entrust::can('birth-registration-show'))
        {
            $result = $this->birth->viewBirthCertificate($id);

            return view('birthRegistration.birth_details.birth_certificate')->with('child',$result);
        }
        else{
            return abort(404,'You are not allowed');
        }

    }

}
