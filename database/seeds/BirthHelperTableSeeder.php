<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BirthHelperTableSeeder extends Seeder{

    public function run()
    {
        DB::table('birth_helpers')->delete();

        DB::table('birth_helpers')->insert(['hlpr_id'=>1,'hlpr_name'=>'People at Home']);
        DB::table('birth_helpers')->insert(['hlpr_id'=>2,'hlpr_name'=>'Nurse']);
        DB::table('birth_helpers')->insert(['hlpr_id'=>3,'hlpr_name'=>'Doctor']);
        DB::table('birth_helpers')->insert(['hlpr_id'=>4,'hlpr_name'=>'Other']);
    }
}