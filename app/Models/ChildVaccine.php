<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildVaccine extends Model {

    protected  $table = 'child_vaccines';

    protected $guarded = array();

    protected  $primaryKey = 'chld_vcin_id';

    public function getVaccineName($id)
    {
        $vaccine = Vaccine::find($id);

        return $vaccine->vcin_name;
    }

    public function getVacillatorName($id)
    {
        $vacillator = Vaccillator::find($id);

        return $vacillator->vclr_first_name." ".$vacillator->vclr_last_name;
    }


}
