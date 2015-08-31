<?php namespace Repo\Repositories\Role;
/**
 * Created by PhpStorm.
 * User: nOt bIG dEaL
 * Date: 6/8/2015
 * Time: 2:13 PM
 */


/**
 * Interface RoleInterface
 * @package Repo\Repositories\Role
 */
interface RoleInterface{

    /**
     * @param $role
     * @return mixed
     */
    public function store($role);

    /**
     * @param $role
     * @param $id
     * @return mixed
     */
    public function update($role,$id);

    /**
     * @param $id
     * @internal param $role
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @return mixed
     */
    public function getRoleById($id);

    /**
     * @return mixed
     */
    public function getAllRoles();

    /**
     * @return mixed
     */
    public function getRolesForDropDown();

    /**
     * @param $id
     * @return mixed
     */
    public function getPermissionsForGivenRole($id);
}