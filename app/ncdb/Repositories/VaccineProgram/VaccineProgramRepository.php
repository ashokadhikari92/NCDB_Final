<?php namespace Repo\Repositories\VaccineProgram;



use App\Models\ChildVaccine;
use App\Helper\NCDBHelper;
use Repo\Repositories\BirthDetail\BirthDetailInterface;
use Repo\Repositories\Vaccine\VaccineInterface;
use App\Models\VaccineDose;

class VaccineProgramRepository implements VaccineProgramInterface
{

    public $vaccine;

    public $child;

    private $helper;

    private $vaccineDose;

    function __construct(VaccineInterface $vaccine,BirthDetailInterface $child, NCDBHelper $helper, VaccineDose $vaccineDose)
    {
        $this->child = $child;

        $this->vaccine = $vaccine;

        $this->helper = $helper;

        $this->vaccineDose = $vaccineDose;
    }

    public function store($input, $id)
    {
        $data['chld_vcin_vaccine_id'] = $input['chld_vcin_vaccine_id'];

        $data['chld_vcin_registration_id'] = $input['chld_vcin_registration_id'];

        $data['chld_vcin_date'] = $input['chld_vcin_date'];

        $data['chld_vcin_dose_no'] = $input['chld_vcin_dose_no'];

        $data['chld_vcin_address'] = $input['chld_vcin_address'];

        $data['chld_vcin_place'] = $input['chld_vcin_place'];

        $data['chld_vcin_vaccillator_id'] = $input['chld_vcin_vaccillator_id'];

        $result = ChildVaccine::create($data);

        return $result;

    }

    public function update($input, $id)
    {
        // TODO: Implement update() method.
    }

    public function getListOfVaccineForChild($id)
    {
        $vaccines = $this->vaccine->getAllVaccines();

        $child = $this->child->getChildByRegistrationId($id);

        $age =  $this->helper->calculateTotalDays($child->brth_birth_date_ad);

        foreach($vaccines as $vaccine)
        {
            $givenVaccine = \DB::table('child_vaccines')
            ->where('chld_vcin_registration_id',$id)
            ->where('chld_vcin_vaccine_id',$vaccine->vcin_id)
            ->get();

            $keyName = NCDBHelper::getKeyName();

            $vaccine['which_dose_no'] = 1;
            $vaccine['previous_date'] = "None";

            $vaccineDetail = \DB::table('vaccines')->where('vcin_id',$vaccine->vcin_id)->first();

            //if there is already provided vaccines then calculates the which dose is next
            if($givenVaccine!= null)
            {
                if(($vaccineDetail->vcin_dose)>(count($givenVaccine)))
                {
                    $vaccine['which_dose_no'] = count($givenVaccine)+1;
                }
                else
                {
                    $vaccine['which_dose_no'] = 'Full';
                }

                $vaccine['previous_date'] = $givenVaccine[count($givenVaccine)-1]->chld_vcin_date;
            }

            //finds the dose interval and replaces the numerical dose no by string if dose is not full
            if($vaccine['which_dose_no'] != 'Full'){
                $vaccine['dose_interval'] = $this->vaccineDose->where('dose_vaccine_dose_no',$vaccine['which_dose_no'])
                    ->where('dose_vaccine_id',$vaccine->vcin_id)->get(['dose_interval'])->first();
                foreach($keyName as $key => $value)
                {
                    if($vaccine['which_dose_no'] == $key)
                        $vaccine['which_dose_no'] = $value;
                }
            }

        }

        $vaccineList = array();
        foreach($vaccines as $vaccine)
        {
            if($vaccine['dose_interval']['dose_interval'] <= $age)
            {
                $vaccineList[] = $vaccine;
            }
        }
        return $vaccineList;
    }
}