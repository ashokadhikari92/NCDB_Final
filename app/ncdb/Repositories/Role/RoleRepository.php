<?php namespace Repo\Repositories\Role;
/**
 * Created by PhpStorm.
 * User: nOt bIG dEaL
 * Date: 6/8/2015
 * Time: 2:13 PM
 */
use App\Models\Role;
use League\Flysystem\Exception;

class RoleRepository implements RoleInterface{

        protected $role;

        protected $result;

        function __construct(Role $role)
        {
            $this->role = $role;
        }

        /**
         * @param $role
         * @return mixed
         */
        public function store($role)
        {
            try{
                $this->result['role'] = $this->role->create($role);

                $this->result['success'] = true;
            }catch (Exception $e){
                $this->result['success'] = false;

                $this->result['error'] = $e;
            }
            return $this->result;
        }

        /**
         * @param $role
         * @return mixed
         */
        public function update($role,$id)
        {
            try{
                $this->result['role'] = $this->role->find($id)->update($role);

                $this->result['success'] = true;
            }catch (Exception $e){
                $this->result['success'] = false;

                $this->result['error'] = $e;
            }
            return $this->result;
        }

        /**
         * @param $id
         * @throws \Exception
         * @internal param $role
         * @return mixed
         */
        public function delete($id)
        {
            try{
                $this->result['role'] = $this->role->find($id)->delete();

                $this->result['success'] = true;
            }catch (Exception $e){
                $this->result['success'] = false;

                $this->result['error'] = $e;
            }
            return $this->result;
        }

        /**
         * @param $id
         * @return mixed
         */
        public function getRoleById($id)
        {
            return $this->role->find($id);
        }

        /**
         * @return mixed
         */
        public function getAllRoles()
        {
            return $this->role->all();
        }

        /**
         * @return mixed
         */
        public function getRolesForDropDown()
        {
            return $this->role->orderBy('id','asc')->lists('display_name','id');
        }

    /**
     * @param $id
     * @return mixed
     */
    public function getPermissionsForGivenRole($id)
    {
        return $this->role->permissions()->get();
    }
}


