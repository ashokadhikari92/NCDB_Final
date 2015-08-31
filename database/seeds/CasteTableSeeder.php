<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CasteTableSeeder extends Seeder{

    public function run()
    {
        DB::table('castes')->delete();

        DB::table('castes')->insert(['cast_id'=>'1','cast_name'=>'Braman']);
        DB::table('castes')->insert(['cast_id'=>'2','cast_name'=>'Chhetri']);
        DB::table('castes')->insert(['cast_id'=>'3','cast_name'=>'Magar']);
        DB::table('castes')->insert(['cast_id'=>'4','cast_name'=>'Gurung']);
        DB::table('castes')->insert(['cast_id'=>'5','cast_name'=>'Newar']);
    }
}