<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BirthPlaceTableSeeder extends Seeder{

    public function run()
    {
        DB::table('birth_places')->delete();

        DB::table('birth_places')->insert(['plac_id'=>1,'plac_name'=>'Home']);
        DB::table('birth_places')->insert(['plac_id'=>2,'plac_name'=>'Health Post']);
        DB::table('birth_places')->insert(['plac_id'=>3,'plac_name'=>'Hospital']);
        DB::table('birth_places')->insert(['plac_id'=>4,'plac_name'=>'Other']);
    }
}