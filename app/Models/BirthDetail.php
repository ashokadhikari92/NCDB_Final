<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BirthDetail extends Model {

	protected  $table = 'birth_details';

    protected $guarded = array();

    protected  $primaryKey = 'brth_id';

    public $rules = [];

    public $customMessage = [];

    public function father()
    {
        return $this->hasOne('App\Models\Parents','prnt_id','father');
    }

    public function mother()
    {
        return $this->hasOne('App\Models\Parents','prnt_id','mother');
    }

    public function registeredBy()
    {
        return $this->belongsTo('App\Models\User','brth_registered_by');
    }

}
