<?php


use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder{

    public function run()
    {
        DB::table('permissions')->delete();
/*

        App\Models\Permission::create(['id'=>'2','name'=>'birth_add','display_name'=>'Add','type'=>'third','url'=>'/birth_details/create','parent_id'=>'1']);
        App\Models\Permission::create(['id'=>'3','name'=>'birth_edit','display_name'=>'Edit','type'=>'third','url'=>'/birth_details/{id}/edit','parent_id'=>'1']);
        App\Models\Permission::create(['id'=>'4','name'=>'birth_delete','display_name'=>'Delete','type'=>'third','url'=>'4','parent_id'=>'1']);
        App\Models\Permission::create(['id'=>'5','name'=>'vaccination','display_name'=>'Vaccination','type'=>'main','url'=>'/child_vaccines','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'6','name'=>'vaccination_add','display_name'=>'Add','type'=>'third','url'=>'6','parent_id'=>'5']);
        App\Models\Permission::create(['id'=>'7','name'=>'vaccination_edit','display_name'=>'Edit','type'=>'third','url'=>'7','parent_id'=>'5']);
        App\Models\Permission::create(['id'=>'8','name'=>'vaccination_delete','display_name'=>'Delete','type'=>'third','url'=>'8','parent_id'=>'5']);
        App\Models\Permission::create(['id'=>'9','name'=>'education','display_name'=>'Education','type'=>'main','url'=>'/educations','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'10','name'=>'user_management','display_name'=>'User Management','type'=>'setting','url'=>'/users','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'11','name'=>'Roles','display_name'=>'Roles','type'=>'setting','url'=>'/roles','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'12','name'=>'Vaccine','display_name'=>'Vaccine','type'=>'main','url'=>'/vaccines','parent_id'=>'0']);*/


        /*---------------------------------------------------------------------------------------------*/
        App\Models\Permission::create(['id'=>'1','name'=>'birth_registration','display_name'=>'Birth Registration','type'=>'main','url'=>'/birth_details','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'2','name'=>'birth-registration-index','display_name'=>'Read','type'=>'sub-menu','url'=>'2','parent_id'=>'1']);
        App\Models\Permission::create(['id'=>'3','name'=>'birth-registration-create','display_name'=>'Create','type'=>'reports','url'=>'3','parent_id'=>'1']);
        App\Models\Permission::create(['id'=>'4','name'=>'birth-registration-show','display_name'=>'View','type'=>'sub-menu','url'=>'4','parent_id'=>'1']);
        App\Models\Permission::create(['id'=>'5','name'=>'birth-registration-edit','display_name'=>'Edit','type'=>'reports','url'=>'5','parent_id'=>'1']);
        App\Models\Permission::create(['id'=>'6','name'=>'birth-registration-Delete','display_name'=>'Delete','type'=>'reports','url'=>'6','parent_id'=>'1']);
        /*---------------------------------------------------------------------------------------------*/

        /*---------------------------------------------------------------------------------------------*/
        App\Models\Permission::create(['id'=>'7','name'=>'vaccination','display_name'=>'Vaccination','type'=>'main','url'=>'/child_vaccines','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'8','name'=>'vaccination-index','display_name'=>'Read','type'=>'sub-menu','url'=>'8','parent_id'=>'7']);
        App\Models\Permission::create(['id'=>'9','name'=>'vaccination-create','display_name'=>'Create','type'=>'reports','url'=>'9','parent_id'=>'8']);
        App\Models\Permission::create(['id'=>'10','name'=>'vaccination-show','display_name'=>'View','type'=>'sub-menu','url'=>'10','parent_id'=>'9']);
        App\Models\Permission::create(['id'=>'11','name'=>'vaccination-edit','display_name'=>'Edit','type'=>'reports','url'=>'11','parent_id'=>'10']);
        App\Models\Permission::create(['id'=>'12','name'=>'vaccination-Delete','display_name'=>'Delete','type'=>'reports','url'=>'12','parent_id'=>'11']);
        /*---------------------------------------------------------------------------------------------*/

        App\Models\Permission::create(['id'=>'13','name'=>'user_management','display_name'=>'User Management','type'=>'setting','url'=>'/users','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'14','name'=>'Roles','display_name'=>'Roles','type'=>'setting','url'=>'/roles','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'15','name'=>'Vaccine','display_name'=>'Vaccine','type'=>'main','url'=>'/vaccines','parent_id'=>'0']);


        App\Models\Permission::create(['id'=>'16','name'=>'Birth Registration','display_name'=>'Birth Registration','type'=>'reports','url'=>'/child/reports','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'17','name'=>'Vaccination Module','display_name'=>'Vaccination Module','type'=>'reports','url'=>'/vaccination/reports','parent_id'=>'0']);
        App\Models\Permission::create(['id'=>'18','name'=>'parents','display_name'=>'Parents','type'=>'main','url'=>'/parents','parent_id'=>'0']);

    }
}