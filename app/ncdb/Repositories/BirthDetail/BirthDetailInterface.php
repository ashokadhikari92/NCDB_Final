<?php namespace Repo\Repositories\BirthDetail;
use Repo\Repositories\Address\AddressRepository;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 3:56 PM
 */



 interface BirthDetailInterface{

     public function registerChild($child);

     public function updateChild($child,$id);

     public function getRegistrationId($input);

     public function getChildById($id);

     public function getAllChildren();

     public function deleteBirthDetail();

     public function getRules();

     public function getCustomMessage();

     public function getChildLocation($id);

     public function getChildByRegistrationId($id);

     public function viewBirthCertificate($id);

     public function getAllHandicapType();

     public function getAllCastes();

     public function getAllBirthPlaces();

     public function getAllBirthHelpers();

     public function addChildDetails($input);

     public function viewChildBirthCertificate($registrationId);
 }