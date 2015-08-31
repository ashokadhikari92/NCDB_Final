<?php namespace Repo\Repositories\ParentsDetail;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 4:14 PM
 */

use App\Models\Parents;
use Repo\Repositories\Address\AddressRepository;

    class ParentsDetailRepository implements ParentsDetailInterface{

        public $parent;

        public $location;

        function __construct(Parents $parent,AddressRepository $location)
        {
            $this->parent = $parent;

            $this->location = $location;
        }

        public function addParent($parent)
        {
            $parent_id = $this->parent->create($parent);

            return $parent_id;
        }

        public function updateParent($parent,$id)
        {
            $parent = $this->parent->find($id)->update($parent);

            return $parent;
        }

        public function getParentById($id)
        {
            return $this->parent->find($id);
        }

        public function getParentNameById($id)
        {
            $parent = $this->parent->find($id);

            $name = $parent['prnt_first_name']." ".$parent['prnt_last_name'];

            return $name;
        }

        public function getParentNameByCitizenshipNo($citizenshipNo)
        {
            $parent = $this->parent->where('prnt_citizenship_no',$citizenshipNo)->first();

            $name = $parent['prnt_first_name']." ".$parent['prnt_last_name'];

            return $name;
        }

        public function getAllParentDetails($id)
        {
            $parent = $this->parent->find($id);

            $address = $this->location->getFullAddress($parent['prnt_address']);

            $parent['address'] = $address;

            return $parent;
        }

        public function getAllParents()
        {
            return $this->parent->all();
        }

        public function getParentByCitizenShipNo($citizenshipNumber)
        {
            $parent = $this->parent->where('prnt_citizenship_no',$citizenshipNumber)->first();

            $address = $this->location->getFullAddress($parent['prnt_address']);

            $parent['address'] = $address;

            return $parent;
        }
    }