<?php
use Illuminate\Database\Seeder;
use App\Models\Role;

/**
 * Created by PhpStorm.
 * User: nOt bIG dEaL
 * Date: 6/8/2015
 * Time: 3:23 PM
 */

class VaccinationPlaceTableSeeder extends Seeder{

    public function run()
    {
        DB::table('vaccination_places')->delete();

        App\Models\VaccinationPlace::create(['id'=>'1','place_name'=>'Sunrise Clinic','address'=>'89']);
        App\Models\VaccinationPlace::create(['id'=>'2','place_name'=>'ABC Hospital','address'=>'89']);
        App\Models\VaccinationPlace::create(['id'=>'3','place_name'=>'EFG School','address'=>'89']);

    }
}