<?php namespace Repo\Repositories\BirthDetail;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/28/2015
 * Time: 10:01 AM
 */

use App\Helper\NCDBHelper;
use App\Models\BirthHelper;
use App\Models\BirthPlace;
use App\Models\Caste;
use League\Flysystem\Exception;
use Repo\Repositories\Address\AddressRepository;
use Repo\Repositories\ParentsDetail\ParentsDetailRepository as Parents;
use App\Models\BirthDetail as Child;
use App\Models\HandicapType;

    class BirthDetailRepository implements BirthDetailInterface{

        public $parent;

        public $child;

        protected $location;

        private $handicapTYpe;

        private $caste;

        private $birthPlace;

        private $birthHelper;

        private $helper;

        function __construct(Parents $parent,Child $child,AddressRepository $location,HandicapType $handicapType,Caste $caste, BirthPlace $birthPlace, BirthHelper $birthHelper, NCDBHelper $helper)
        {
            $this->parent = $parent;

            $this->child = $child;

            $this->location = $location;

            $this->handicapTYpe = $handicapType;

            $this->caste = $caste;

            $this->birthPlace = $birthPlace;

            $this->birthHelper = $birthHelper;

            $this->helper = $helper;
        }

        public function registerChild($child)
        {
            $father = array(
                'prnt_first_name' => $child['father_first_name'],
                'prnt_last_name'  => $child['father_last_name'],
                'prnt_full_name_nepali' => $child['father_full_name'],
                'prnt_gender'     => "Male",
                'prnt_address' => $child['father_ward_no'],
                'prnt_citizenship_no' => $child['father_citizenship_no'],
                'prnt_citizenship_issued_district' => $child['father_citizenship_issued_district']
            );
            $mother = array(
                'prnt_first_name' => $child['mother_first_name'],
                'prnt_last_name'  => $child['mother_last_name'],
                'prnt_full_name_nepali' => $child['mother_full_name'],
                'prnt_gender'     => "Female",
                'prnt_address' => $child['mother_ward_no'],
                'prnt_citizenship_no' => $child['mother_citizenship_no'],
                'prnt_citizenship_issued_district' => $child['mother_citizenship_issued_district']
            );
            $gfather = array(
                'prnt_first_name' => $child['gfather_first_name'],
                'prnt_last_name'  => $child['gfather_last_name'],
                'prnt_full_name_nepali' => $child['gfather_full_name'],
                'prnt_gender'     => "Male",
                'prnt_address' => '',
                'prnt_citizenship_no' => '',
                'prnt_citizenship_issued_district' => $child['gfather_citizenship_issued_district']
            );


            $father = $this->parent->addParent($father);
            $mother = $this->parent->addParent($mother);
            $gfather = $this->parent->addParent($gfather);
            $registration_id = $this->getRegistrationId($child);
            $children = array(
                'brth_registration_id' => $registration_id,
                'brth_first_name' => $child['brth_first_name'],
                'brth_last_name' => $child['brth_last_name'],
                'brth_full_name_nepali' => $child['brth_full_name'],
                'brth_birth_date_bs' => $child['brth_birth_date_bs'],
                'brth_birth_date_ad' => $child['brth_birth_date_ad'],
                'brth_gender'    => $child['brth_gender'],
                'brth_father'    => $father['prnt_id'],
                'brth_mother'    => $mother['prnt_id'],
                'brth_grand_father' => $gfather['prnt_id'],
                'brth_birth_address' =>$child['brth_ward_no'],
                'brth_informed_by' => $child['brth_informer'],
                'brth_registered_date' => date('Y-m-d'),
                'brth_registered_by' => \Auth::user()->id,
                'brth_birth_place' => $child['brth_birth_place'],
                'brth_birth_type' => $child['brth_birth_type'],
                'brth_birth_helper' => $child['brth_birth_helper'],
                'brth_caste' => $child['brth_caste'],
                'brth_handicap_type' => $child['brth_handicap'],
                'brth_country_name' => $child['brth_country_name'],
            );

            $child_id = Child::create($children);

            $father_address = $this->location->getFullAddress($father['prnt_address']);

            $child_address = $this->location->getFullAddress($child_id['brth_birth_address']);

            $result = [
                'success' => true,
                'father_name'  => $father['prnt_first_name']." ".$father['prnt_last_name'],
                'mother_name'  => $mother['prnt_first_name']." ".$mother['prnt_last_name'],
                'child_name'   => $child_id['brth_first_name']." ".$child_id['brth_last_name'],
                'grand_father' => $gfather['prnt_first_name']." ".$gfather['prnt_last_name'],
                'birth_date_bs' => $child_id['brth_birth_date_bs'],
                'birth_date_ad' => $child_id['brth_birth_date_ad'],
                'birth_district' => $child_address['district'],
                'birth_vdc' => $child_address['vdc'],
                'birth_ward_no' => $child_address['ward_no'],
                'birth_address' => $child_address['vdc']." Ward No ".$child_address['ward_no'].$child_address['district']." District ",
                'registration' => $child_id['brth_registration_id'],
                'registered_date' => $child_id['brth_registered_date'],
                'informer_name' => $child_id['brth_informer'],
                'father_district' => $father_address['district'],
                'father_vdc' => $father_address['vdc'],
                'father_ward_no' => $father_address['ward_no'],
                'father_citizenship_issued_district' => $father['prnt_citizenship_issued_district'],
                'father_citizenship_issued_date' => $father['prnt_citizenship_issued_date'],
                'father_citizenship_no' => $father['prnt_citizenship_no'],
                'mother_citizenship_issued_district' => $mother['prnt_citizenship_issued_district'],
                'mother_citizenship_issued_date' => $mother['prnt_citizenship_issued_date'],
                'mother_citizenship_no' => $mother['prnt_citizenship_no'],
                'registar' => $child_id->registeredBy()->get(),
            ];
            if($child_id['brth_gender'] === "Female"){
                $result['g_son_daughter'] = "granddaughter";
                $result['son_daughter'] = "daughter";
                $result['miss.mr'] = "Miss.";
            }
            else if($child_id['brth_gender'] === "Male"){
                $result['g_son_daughter'] = "grandson";
                $result['son_daughter'] = "son";
                $result['miss.mr'] = "Mr.";
            }
            else{
                $result['g_son_daughter'] = "grand child";
                $result['son_daughter'] = "child";
                $result['miss.mr'] = "Mr./Miss.";
            }
            return $result;

        }

        public function updateChild($child,$id)
        {
            $result = array();
            try{
                $result['child'] = $this->child->find($id)->update($child);

                $result['success'] = true;

                $result['message'] = "Successfully Updated";
            }catch (Exception $e){

                $result['success'] = false;

                $result['message'] = "Something gone wrong while updating";

                $result['exception'] = $e;
        }
            return $result;
        }

        public function getChildById($id)
        {
            $child = $this->child->find($id);

            $child->age = $this->helper->calculateAge($child->brth_birth_date_ad);

            return $child;
        }

        public function getAllChildren()
        {
            $data = $this->child->all();

            foreach($data as $child)
            {
                $child['full_name'] = $child['brth_first_name']." ".$child['brth_last_name'];

                $child['brth_father'] = $this->parent->getParentNameByCitizenshipNo($child['brth_father']);

                $child['brth_mother'] = $this->parent->getParentNameByCitizenshipNo($child['brth_mother']);
            }
            return $data;
        }

        public function getRules()
        {
            return $this->child->rules;
        }

        public function getCustomMessage()
        {
            return $this->child->customMessage;
        }

        public function deleteBirthDetail()
        {
            // TODO: Implement deleteBirthDetail() method.
        }

        /**
         * @param $input
         * @internal param AddressRepository $location
         * @return string
         */
        public function getRegistrationId($input)
        {
            //dd($input);
            //$zone = $this->location->getLocationCodeById($input['brth_zone']);

            //$ward_no = $this->location->getLocationCodeById($input['brth_ward_no']);;//$input['brth_ward_no'];
            $ward_no = $this->location->getLocationCodeById($input['brth_birth_address']);

            $sn = \DB::table('birth_details')->max('brth_id');;

            return $ward_no."-072-73-".($sn+1);
        }

        public function getChildLocation($id)
        {
            $child = $this->child->find($id);

            return $this->location->getChildLocationInJson($child->brth_birth_address);

        }

        public function getChildByRegistrationId($id)
        {
            $child = $this->child->where('brth_registration_id',$id)->first();

            return $child;
        }

        public function viewBirthCertificate($id)
        {
            $child_id = $this->getChildById($id);

            $father = $this->parent->getParentById($child_id['brth_father']);

            $mother = $this->parent->getParentById($child_id['brth_mother']);

            $gfather = $this->parent->getParentById($child_id['brth_grand_father']);

            $father_address = $this->location->getFullAddress($father['prnt_address']);

            $child_address = $this->location->getFullAddress($child_id['brth_birth_address']);

            $result = [
                'success' => true,
                'father_name'  => $father['prnt_first_name']." ".$father['prnt_last_name'],
                'mother_name'  => $mother['prnt_first_name']." ".$mother['prnt_last_name'],
                'child_name'   => $child_id['brth_first_name']." ".$child_id['brth_last_name'],
                'grand_father' => $gfather['prnt_first_name']." ".$gfather['prnt_last_name'],
                'birth_date_bs' => $child_id['brth_birth_date_bs'],
                'birth_date_ad' => $child_id['brth_birth_date_ad'],
                'birth_district' => $child_address['district'],
                'birth_vdc' => $child_address['vdc'],
                'birth_ward_no' => $child_address['ward_no'],
                'birth_address' => $child_address['vdc']." Ward No ".$child_address['ward_no'].$child_address['district']." District ",
                'registration' => $child_id['brth_registration_id'],
                'registered_date' => $child_id['brth_registered_date'],
                'informer_name' => $child_id['brth_informed_by'],
                'father_district' => $father_address['district'],
                'father_vdc' => $father_address['vdc'],
                'father_ward_no' => $father_address['ward_no'],
                'father_citizenship_issued_district' => $father['prnt_citizenship_issued_district'],
                'father_citizenship_issued_date' => $father['prnt_citizenship_issued_date'],
                'father_citizenship_no' => $father['prnt_citizenship_no'],
                'mother_citizenship_issued_district' => $mother['prnt_citizenship_issued_district'],
                'mother_citizenship_issued_date' => $mother['prnt_citizenship_issued_date'],
                'mother_citizenship_no' => $mother['prnt_citizenship_no'],
                'registar' => $child_id->registeredBy()->get(),
            ];
            if($child_id['brth_gender'] === "Female"){
                $result['g_son_daughter'] = "granddaughter";
                $result['son_daughter'] = "daughter";
                $result['miss.mr'] = "Miss.";
            }
            else if($child_id['brth_gender'] === "Male"){
                $result['g_son_daughter'] = "grandson";
                $result['son_daughter'] = "son";
                $result['miss.mr'] = "Mr.";
            }
            else{
                $result['g_son_daughter'] = "grand child";
                $result['son_daughter'] = "child";
                $result['miss.mr'] = "Mr./Miss.";
            }
            return $result;
        }

        public function getAllHandicapType()
        {
            return $this->handicapTYpe->all()->lists('hndy_name','hndy_name');
        }

        public function getAllCastes()
        {
            return $this->caste->all()->lists('cast_name','cast_name');
        }

        public function getAllBirthPlaces()
        {
            return $this->birthPlace->all()->lists('plac_name','plac_name');
        }

        public function getAllBirthHelpers()
        {
            return $this->birthHelper->all()->lists('hlpr_name','hlpr_name');
        }

        public function addChildDetails($input)
        {
            $input['brth_registration_id'] = $this->getRegistrationId($input);

            $input['brth_birth_date_ad'] = date('Y-m-d',strtotime($input['brth_birth_date_ad']));

            $input['brth_registered_by'] = \Auth::user()->id;

            $input['created_by'] = \Auth::user()->id;

            $input['updated_by'] = \Auth::user()->id;

            $input['brth_registered_date'] = date('Y-m-d');

            $child = $this->child->create($input);

            return $this->viewChildBirthCertificate($child->brth_registration_id);
        }

        public function viewChildBirthCertificate($registrationId)
        {
            $child = $this->getChildByRegistrationId($registrationId);

            $father = $this->parent->getParentByCitizenShipNo($child->brth_father);

            $mother = $this->parent->getParentByCitizenShipNo($child->brth_mother);

            $gfather = $this->parent->getParentByCitizenShipNo($child->brth_grand_father);

            $informedBy = $this->parent->getParentByCitizenShipNo($child->brth_informed_by);

            $father_address = $this->location->getFullAddress($father['prnt_address']);

            $child_address = $this->location->getFullAddress($child['brth_birth_address']);

            $result = [
                'success' => true,
                'father_name'  => $father['prnt_first_name']." ".$father['prnt_last_name'],
                'mother_name'  => $mother['prnt_first_name']." ".$mother['prnt_last_name'],
                'child_name'   => $child['brth_first_name']." ".$child['brth_last_name'],
                'grand_father' => $gfather['prnt_first_name']." ".$gfather['prnt_last_name'],
                'birth_date_bs' => $child['brth_birth_date_bs'],
                'birth_date_ad' => $child['brth_birth_date_ad'],
                'birth_district' => $child_address['district'],
                'birth_vdc' => $child_address['vdc'],
                'birth_ward_no' => $child_address['ward_no'],
                'birth_address' => $child_address['vdc']." Ward No ".$child_address['ward_no'].$child_address['district']." District ",
                'registration' => $child['brth_registration_id'],
                'registered_date' => $child['brth_registered_date'],
                'informer_name' => $informedBy['prnt_first_name']." ".$informedBy['prnt_last_name'],
                'father_district' => $father_address['district'],
                'father_vdc' => $father_address['vdc'],
                'father_ward_no' => $father_address['ward_no'],
                'father_citizenship_issued_district' => $father['prnt_citizenship_issued_district'],
                'father_citizenship_issued_date' => $father['prnt_citizenship_issued_date'],
                'father_citizenship_no' => $father['prnt_citizenship_no'],
                'mother_citizenship_issued_district' => $mother['prnt_citizenship_issued_district'],
                'mother_citizenship_issued_date' => $mother['prnt_citizenship_issued_date'],
                'mother_citizenship_no' => $mother['prnt_citizenship_no'],
                'registar' => $child->registeredBy()->get(),
            ];
            if($child['brth_gender'] === "Female"){
                $result['g_son_daughter'] = "granddaughter";
                $result['son_daughter'] = "daughter";
                $result['miss.mr'] = "Miss.";
            }
            else if($child['brth_gender'] === "Male"){
                $result['g_son_daughter'] = "grandson";
                $result['son_daughter'] = "son";
                $result['miss.mr'] = "Mr.";
            }
            else{
                $result['g_son_daughter'] = "grand child";
                $result['son_daughter'] = "child";
                $result['miss.mr'] = "Mr./Miss.";
            }
            return $result;
        }
    }
