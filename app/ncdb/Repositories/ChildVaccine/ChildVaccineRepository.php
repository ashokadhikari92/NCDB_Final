<?php namespace Repo\Repositories\ChildVaccine;
/**
 * Created by PhpStorm.
 * User: nOt bIG dEaL
 * Date: 5/23/2015
 * Time: 7:10 AM
 */
Use App\Models\ChildVaccine;
use Repo\Repositories\Address\AddressInterface;
use Repo\Repositories\BirthDetail\BirthDetailInterface;
use Repo\Repositories\Vaccine\VaccineInterface;

class ChildVaccineRepository implements ChildVaccineInterface
{
    protected $child_vaccine;

    protected $result = array();

    private $location;

    private $child;

    private $vaccine;


    function __construct(ChildVaccine $child_vaccine, AddressInterface $location, BirthDetailInterface $child, VaccineInterface $vaccine)
    {
        $this->child_vaccine = $child_vaccine;

        $this->location = $location;

        $this->child = $child;

        $this->vaccine = $vaccine;
    }

    public function store($input)
    {
        try{
            $this->result['value'] = $this->child_vaccine->create($input);

            $this->result['success'] = true;

            $this->result['message'] = "Successfully Added";
        }catch (\Exception $e){
            $this->result['value'] = $e;

            $this->result['success'] = false;

            $this->result['message'] = "There is Problem to Add the Values";
        }

        return $this->result;
    }

    public function update($input,$id)
    {
        try{
            $this->result['value'] = $this->child_vaccine->find($id)->update($input);

            $this->result['success'] = true;

            $this->result['message'] = "Successfully Updated";
        }catch (\Exception $e){
            $this->result['value'] = $e;

            $this->result['success'] = false;

            $this->result['message'] = "There is Problem to Add the Values";
        }
    }

    public function delete($id)
    {
        try{
            $this->result['value'] = $this->child_vaccine->find($id)->delete();

            $this->result['success'] = true;

            $this->result['message'] = "Successfully Updated";
        }catch (\Exception $e){
            $this->result['value'] = $e;

            $this->result['success'] = false;

            $this->result['message'] = "There is Problem to Add the Values";
        }
    }

    public function findById($id)
    {
        $result = $this->child_vaccine->find($id);

        return $result;
    }

    public function findAll()
    {
        $result = $this->child_vaccine->all();

        foreach($result as $value)
        {
            $child = $this->child->getChildByRegistrationId($value->chld_vcin_registration_id);
            $value['child_full_name'] = $child->brth_first_name." ".$child->brth_last_name;

            $fullAddress = $this->location->getFullAddress($child->brth_birth_address);
            $value['child_address'] = $fullAddress['full_address'];

            $vaccine = $this->vaccine->getVaccineById($value->chld_vcin_vaccine_id);
            $value['vaccine_name'] = $vaccine->vcin_name;
        }
        return $result;
    }

    public function getChildVaccineDetailByRegistrationId($id)
    {
        $data = $this->child_vaccine->where('chld_vcin_registration_id',$id)->get();

       foreach($data as $value)
        {
            $value->chld_vcin_vaccine_id = $value->getVaccineName($value->chld_vcin_vaccine_id);

            $value->chld_vcin_vaccillator_id = $value->getVacillatorName($value->chld_vcin_vaccillator_id);

            $value->chld_vcin_address = $this->location->getFullAddress($value->chld_vcin_address);
        }

        return $data;
    }
}