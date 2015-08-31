<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Permission;
use Illuminate\Http\Request;
use Repo\Repositories\Role\RoleRepository;

class RoleController extends Controller {

    protected $role;

    function __construct(RoleRepository $role)
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
		return view('userManagement.roles.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('userManagement.roles.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CreateRoleRequest $request
     * @return Response
     */
	public function store(Requests\CreateRoleRequest $request)
	{
		$input = $request->all();

        $result = $this->role->store($input);

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

    /**
     * Get all the roles from the table
     *
     */
    public function getAll()
    {
        return $this->role->getAllRoles();
    }

    /**
     * Gets all the current list of permission and returns to a view page.
     * @param $id
     * @return $this
     */
    public function assignPermission($id)
    {
        /*$permissions = $this->role->getPermissionsForGivenRole($id);*/
        $permissions = \DB::select('select permission_id from permission_role where role_id = ?',array($id));
        $permissions_array = array();
        foreach($permissions as $key => $value)
        {
            $permissions_array[] = $value->permission_id;
        }
       //dd($permissions_array);
        $all_permissions = Permission::all();

        $role = $this->role->getRoleById($id);

        return view('userManagement.roles.permission')
            ->with('all_permissions',$all_permissions)
            ->with('role',$role)
            ->with('permissions', $permissions_array);
    }

}
