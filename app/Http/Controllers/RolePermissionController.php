<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRolePermissionRequest;
use App\Models\Permission;
use App\Models\Role;
use Repo\Repositories\Role\RoleInterface;

use Illuminate\Http\Request;

class RolePermissionController extends Controller {

    protected $role;

    function __construct(RoleInterface $role)
    {
        $this->role = $role;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $roles = $this->role->getAllRoles();

		return view('userManagement.role_permission.create')->with('roles',$roles);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRolePermissionRequest|Requests\CreateRolePermissionRequestRequest $request
     * @return Response
     */
	public function store(CreateRolePermissionRequest $request)
	{
		$input = $request->all();

        $role = Role::find($input['role_id']);

        $permission_array = array();

        foreach($input as $key => $value)
        {
            $permission_array[] = $value;
        }
        array_shift( $permission_array);
        array_shift( $permission_array);

        $role->savePermissions($permission_array);

        return redirect('roles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function getPermission($id)
    {
        return Permission::all();
    }

}
