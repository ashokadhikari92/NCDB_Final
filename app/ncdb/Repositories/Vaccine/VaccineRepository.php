<?php namespace Repo\Repositories\Vaccine;


use App\Models\Vaccine;
use League\Flysystem\Exception;
use Repo\Repositories\BirthDetail\BirthDetailInterface;

class VaccineRepository implements VaccineInterface
{
    private $vaccine;

    private $child;

    function __construct(Vaccine $vaccine,BirthDetailInterface $child)
    {
        $this->vaccine = $vaccine;

        $this->child = $child;
    }


    public function storeVaccine($input)
    {
        $result = array();

        try{
            $input['created_by'] = \Auth::User()->id;

            $input['updated_by'] = \Auth::User()->id;

            $result['vaccine'] = $this->vaccine->create($input);

            $result['success'] = true;

            $result['message'] = "Successfully Added";
        }catch (Exception $e){

            $result['success'] = false;

            $result['message'] = "Something gone wrong while Adding";

            $result['exception'] = $e;
        }

        return $result;
    }

    public function updateVaccine($input, $id)
    {
        $result = array();

        try{

            $result['vaccine'] = $this->vaccine->find($id)->update($input);

            $result['success'] = true;

            $result['message'] = "Successfully Updated";
        }catch (Exception $e){

            $result['success'] = false;

            $result['message'] = "Something gone wrong while Updating";

            $result['exception'] = $e;
        }

        return $result;
    }

    public function getAllVaccines()
    {
        return $this->vaccine->all();
    }

    public function getVaccineById($id)
    {
        return $this->vaccine->find($id);
    }

    public function delete($id)
    {

        $result = [];

        try{
            $result['result'] = $this->vaccine->find($id)->delete();

            $result['success'] = true;

            $result['message'] = 'Vaccine is deleted Successfully';
        }catch (Exception $e){
            $result['result'] = $e;

            $result['success'] = false;

            $result['message'] = 'There is some problem to delete the vaccine';
        }
        return $result;
    }

    public function getVaccineWithWhichDose($vaccineId, $childId)
    {
        $givenVaccine = \DB::table('child_vaccines')->where('chld_vcin_vaccine_id',$vaccineId)->where('chld_vcin_registration_id',$childId)->get();
        
        $vaccine = $this->vaccine->find($vaccineId);

        $vaccine['which_dose'] = 1;

        if($givenVaccine != null){
            $vaccine['which_dose'] = count($givenVaccine)+1;
        }

        $vaccine['full'] = false;

        if( $vaccine['which_dose']> $vaccine->vcin_dose)
        {
            $vaccine['full'] = true;

            return $vaccine;
        }
        return $vaccine;
    }
}