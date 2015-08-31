<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccineDose extends Model {

    protected  $table = 'vaccine_doses';

    protected $guarded = array();

    protected  $primaryKey = 'dose_id';

}
