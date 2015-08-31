<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();


		 //$this->call('UserTableSeeder');
        //$this->call('AddressTableSeeder');
		/* $this->call('RoleTableSeeder');*/
        //$this->call('PermissionTableSeeder');
		/*\DB::table('users')->delete();
		\DB::table('users')->insert(['id'=>'1','user_name'=>'Admin','email'=>'admin@admin.com','password'=>bcrypt('admin'),'user_role'=>1,'office_address'=>'89']);
		\DB::table('users')->insert(['id'=>'2','user_name'=>'Santosh','email'=>'santosh@admin.com','password'=>bcrypt('santosh'),'user_role'=>2,'office_address'=>'89']);*/
        //$this->call('PermissionRoleTableSeeder');
       /* $this->call('VaccinationPlaceTableSeeder');
        $this->call('VaccinatorTableSeeder');
		$this->call('HandicapTableSeeder');
		$this->call('CasteTableSeeder');
		$this->call('BirthHelperTableSeeder');
		$this->call('BirthPlaceTableSeeder');*/
	}

}
