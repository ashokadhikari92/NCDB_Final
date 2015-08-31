<?php namespace App\Http\Composers;

use Repo\Repositories\Role\RoleInterface as Role;

class RegisterUserComposer{

    protected $roles;

    public function __construct(Role $role)
    {
        $this->roles = $role;
    }

    public function compose($view)
    {
        $view->with('roles',$this->roles->getRolesForDropDown());
    }
}