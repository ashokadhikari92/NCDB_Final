<?php namespace Repo\Repositories\ParentsDetail;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 4:03 PM
 */


    interface ParentsDetailInterface{

        public function addParent($parent);

        public function updateParent($parent,$id);

        public function getParentById($id);

        public function getParentNameById($id);

        public function getParentNameByCitizenshipNo($citizenshipNo);

        public function getAllParentDetails($id);

        public function getAllParents();

        public function getParentByCitizenShipNo($citizenshipNumber);
    }