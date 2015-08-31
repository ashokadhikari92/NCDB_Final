<?php namespace Repo\Repositories\Address;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/28/2015
 * Time: 9:41 AM
 */

    use App\Models\Address as Location;

    /**
     * Class AddressRepository
     * @package Repo\Repositories\Address
     */
    class AddressRepository implements AddressInterface{

        protected $location;

        function __construct(Location $location)
        {
            $this->location = $location;
        }


        /**
         * @param $id
         * @return mixed
         */
        public function getLocationByParentId($id)
        {
            return $this->location->where('parent_id','=',$id);
        }

        /**
         * @param $id
         * @return mixed
         */
        public function getLocationNameById($id)
        {
            $location = $this->location->find($id);

            return $location['locn_name'];
        }

        /**
         * @param $id
         * @return mixed
         */
        public function getLocationCodeById($id)
        {
            $location = $this->location->find($id);

            return $location['locn_code'];
        }

        /**
         * @param $id
         * @return mixed
         */
        public function getLocationParentIdById($id)
        {
            $location = $this->location->find($id);

            return $location['locn_parent_id'];
        }

        /**
         * @param $id
         * @return mixed
         */
        public function getAllLocationByParentId($id)
        {
            return Location::where('parent_id','=',$id);
        }

        public function getFullAddress($id)
        {
            $address = array();

            $ward = $this->getLocationById($id);

            $vdc = $this->getLocationById($ward['locn_parent_id']);

            $district = $this->getLocationById($vdc['locn_parent_id']);

            $zone = $this->getLocationById($district['locn_parent_id']);

            $address['zone'] = $zone['locn_name'];

            $address['district'] = $district['locn_name'];

            $address['vdc'] = $vdc['locn_name'];

            $address['ward_no'] = $ward['locn_name'];

            $address['full_address'] = $address['vdc']." ".$address['ward_no']. " ".$address['district'];

            return $address;
        }

        public function getLocationById($id)
        {
            return $this->location->find($id);
        }

        public function getChildLocationInJson($id)
        {
            $address = array();

            $ward = $this->getLocationById($id);

            $vdc = $this->getLocationById($ward['locn_parent_id']);

            $district = $this->getLocationById($vdc['locn_parent_id']);

            $zone = $this->getLocationById($district['locn_parent_id']);

            $address['zone'] = ['zone_id'=>$zone['locn_id'],'zone_name'=>$zone['locn_name']];

            $address['district'] = ['district_id'=>$district['locn_id'],'district_name'=>$district['locn_name']];

            $address['vdc'] = ['vdc_id'=>$vdc['locn_id'],'vdc_name'=>$vdc['locn_name']];

            $address['ward_no'] = ['ward_no_id'=>$ward['locn_id'],'ward_no_name'=>$ward['locn_name']];

            return ($address);
        }

        public function getLocationsByLocnType($type)
        {
            return \DB::table('locations')->where('locn_type','=',$type)->get();
        }
    }