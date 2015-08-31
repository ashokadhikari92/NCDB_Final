<?php
use Illuminate\Database\Seeder;
use App\Role;

/**
 * Created by PhpStorm.
 * User: nOt bIG dEaL
 * Date: 6/8/2015
 * Time: 3:23 PM
 */

class RoleTableSeeder extends Seeder{

    public function run()
    {
        DB::table('roles')->delete();

        App\Models\Role::create(['id'=>'1','name'=>'super admin','display_name'=>'Super Admin','description'=>'Admin with all the permissions']);
        App\Models\Role::create(['id'=>'2','name'=>'owner','display_name'=>'Project Owner','description'=>'User is the owner of a given project']);
        App\Models\Role::create(['id'=>'3','name'=>'admin','display_name'=>'User Administrator','description'=>'User is allowed to manage and edit other users']);

    }
}