<?php namespace Repo\Repositories\Address;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/28/2015
 * Time: 9:41 AM
 */


    interface AddressInterface{

        public function getLocationNameById($id);

        public function getLocationCodeById($id);

        public function getLocationParentIdById($id);

        public function getAllLocationByParentId($id);

        public function getLocationByParentId($id);

        public function getFullAddress($id);

        public function getLocationById($id);

        public function getChildLocationInJson($id);

        public function getLocationsByLocnType($type);
    }