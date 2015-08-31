<?php namespace Repo\Repositories\ChildVaccine;
/**
 * Created by PhpStorm.
 * User: nOt bIG dEaL
 * Date: 5/23/2015
 * Time: 7:09 AM
 */

interface ChildVaccineInterface
{
    public function store($input);

    public function update($input,$id);

    public function delete($id);

    public function findById($id);

    public function findAll();

    public function getChildVaccineDetailByRegistrationId($id);
}