<?php namespace App\Http\Composers;
/**
 * Created by PhpStorm.
 * User: iTs mE )
 * Date: 6/18/2015
 * Time: 3:18 PM
 */
use App\Http\Controllers\UserController;
use App\Models\User;

class SideMenuComposer
{
    protected $user;

    function __construct(UserController $user)
    {
        $this->user = $user;
    }


    public function compose($view)
    {
        $view->with('menus',$this->user->getUserPermissions());
    }
}