<?php namespace App\Http\Controllers;

use App\Models\BirthDetail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helper\NCDBHelper;
use App\Http\Requests\CreateChildVaccineRequest;
use App\Models\VaccinationPlace;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Repo\Repositories\Address\AddressInterface;
use Repo\Repositories\VaccineProgram\VaccineProgramInterface;
use Repo\Repositories\BirthDetail\BirthDetailInterface;
use Repo\Repositories\Vaccine\VaccineInterface;

class VaccinationProgramController extends Controller {

    protected $vaccine_program;

    protected $location;

    protected $child;

    protected $helper;

    private $vaccine;

    function __construct(VaccineProgramInterface $vaccine_program,
        AddressInterface $location,
        BirthDetailInterface $child,
        NCDBHelper $helper,
        VaccineInterface $vaccine)
    {
        $this->vaccine_program = $vaccine_program;

        $this->location = $location;

        $this->child = $child;

        $this->helper = $helper;

        $this->vaccine = $vaccine;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(\Entrust::can('vaccination-create'))
        {
            return view('vaccination.vaccine_program.index');
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
		//
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateChildVaccineRequest $request
     * @return Response
     */
	public function store(CreateChildVaccineRequest $request)
	{
        if(\Entrust::can('vaccination-create'))
        {
            $input = $request->all();

            $this->vaccine_program->store($input,1);

            return redirect('child_vaccines')->with('message','Vaccine Given');
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
        if(\Entrust::can('vaccination-create'))
        {
            $vaccines = $this->vaccine_program->getListOfVaccineForChild($id);

            return view('vaccination.vaccine_program.show')
                ->with('vaccines',$vaccines)
                ->with('child_id',$id);
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

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function vaccineList($id)
    {
        if(\Entrust::can('vaccination-create'))
        {
            return view('vaccination.vaccine_program.vaccine_list');
        }
        else{
            return abort(404,'You are not allowed');
        }

    }

    /**
     * @param $vaccine_id
     * @param $child_id
     * @return $this
     */
    public function provideVaccine($vaccine_id,$child_id)
    {
        if (\Entrust::can('vaccination-create')) {
            $vaccine = $this->vaccine->getVaccineWithWhichDose($vaccine_id,$child_id);

            if($vaccine['full'] == true){
                return redirect('/vaccination/program/'.$child_id)->with('message','This vaccine dose is already completed');
            }

            $user = \Auth::user();

            $child =  $this->child->getChildByRegistrationId($child_id);

            $address = $this->location->getFullAddress($user->office_address);

            $places = \DB::table('vaccination_places')->where('address','=',$user->office_address)->get();

            $vaccilator = \DB::table('vaccillators')->where('vclr_address','=',$user->office_address)->lists('vclr_first_name','vclr_id');
            //$vaccilator = $this->helper->getVaccilatorList();

            return view('vaccination.vaccine_program.create')
                ->with('vaccine',$vaccine)
                ->with('child',$child)
                ->with('address',$address)
                ->with('user_address',$user->office_address)
                ->with('places',$places)
                ->with('vaccilator',$vaccilator);

        } else {
            return abort(404, 'You are not allowed');
        }
    }
}
