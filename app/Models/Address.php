<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

	public $table = 'locations';

    public $guarded = [];

    public $primaryKey = 'locn_id';

}
