<?php namespace Repo\Repositories\VaccineProgram;



interface VaccineProgramInterface
{
    public function store($input,$id);

    public function update($input,$id);

    public function getListOfVaccineForChild($id);
}