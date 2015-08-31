<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AssignLocationRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\Permission;
use Repo\Repositories\Address\AddressInterface;
use Repo\Repositories\Role\RoleInterface as Role;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller {

    protected $role;

    protected $user;

    protected $location;

    function __construct(Role $role,User $user,AddressInterface $location)
    {
        $this->role = $role;

        $this->user = $user;

        $this->location = $location;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('userManagement.users.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $roles = $this->role->getRolesForDropDown();

        return view('userManagement.users.create')->with('roles',$roles);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRegisterRequest $request
     * @return Response
     */
	public function store(UserRegisterRequest $request)
	{
		$input = $request->all();

        $this->user->create($input);

        return redirect('users')->with('message','User Registered Successfully');
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
     * Get the all the permissions of the current user
     * @return mixed
     */
    public function getUserPermissions()
    {
        $role_id = \Auth::user()->user_role;

        $role = $this->role->getRoleById($role_id);

        $permissions = $role->perms()->get();

        return  $permissions;
    }

    public function getUserPermissionsInArray()
    {
        $role_id = \Auth::user()->user_role;

        $role = $this->role->getRoleById($role_id);

        $permissions = $role->perms()->lists('name');

        return  $permissions;
    }

    /**
     * Gives the full address of the login user.
     *
     * @return mixed
     */
    public function fullAddressOfTheUser()
    {
        $user = \Auth::user();

        return $this->location->getFullAddress($user->office_address);
    }

    /**
     * Returns all the system users available on the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        $users = $this->user->all();

        foreach($users as $user)
        {
            $user->user_role = $user->role->name;
        }

        return $users;
    }

    /**
     * Returns to a view page to assign the location to a user.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function assignLocation($id)
    {
        $user = $this->user->find($id);

        return view('userManagement.users.assignLocation')->with('user',$user);
    }

    /**
     * Stores the location of a user
     *
     * @param $id
     * @param AssignLocationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUserLocation($id, AssignLocationRequest $request)
    {
        $input = $request->all();

        $user = $this->user->find($id);

        $user->office_address = $input['office_ward'];

        $user->save();

        return redirect('users')->with('message','Location assigned Successfully');
    }

}
