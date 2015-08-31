<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HandicapTableSeeder extends Seeder{

    public function run()
    {
        DB::table('handicap_types')->delete();

        DB::table('handicap_types')->insert(['hndy_id'=>'1','hndy_name'=>'None']);
        DB::table('handicap_types')->insert(['hndy_id'=>'2','hndy_name'=>'Vision Loss and Blindness']);
        DB::table('handicap_types')->insert(['hndy_id'=>'3','hndy_name'=>'Hearing Loss and Deafness']);
    }
}