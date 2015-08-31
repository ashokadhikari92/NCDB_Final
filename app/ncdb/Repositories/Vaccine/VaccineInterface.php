<?php namespace Repo\Repositories\Vaccine;



interface VaccineInterface
{
    public function storeVaccine($input);

    public function updateVaccine($input,$id);

    public function getAllVaccines();

    public function getVaccineById($id);

    public function getVaccineWithWhichDose($vaccineId,$childId);

    public function delete($id);
}