<?php
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: nOt bIG dEaL
 * Date: 6/8/2015
 * Time: 3:23 PM
 */

class VaccinatorTableSeeder extends Seeder{

    public function run()
    {
        DB::table('vaccillators')->delete();

        App\Models\Vaccillator::create(['vclr_id'=>'1','vclr_first_name'=>'Santosh','vclr_last_name'=>'Santosh','vclr_address'=>'89']);
        App\Models\Vaccillator::create(['vclr_id'=>'2','vclr_first_name'=>'Dinesh','vclr_last_name'=>'Sharma','vclr_address'=>'89']);

    }
}