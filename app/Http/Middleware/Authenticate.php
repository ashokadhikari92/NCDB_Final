<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Repo\Repositories\Role\RoleInterface as Role;

class Authenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

    protected $role;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     * @param Role $role
     * @return \App\Http\Middleware\Authenticate
     */
	public function __construct(Guard $auth, Role $role)
	{
		$this->auth = $auth;

        $this->role = $role;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
                $roles = $this->role->getRolesForDropDown();
				return redirect()->guest('auth/login')->with('roles',$roles);
			}
		}

		return $next($request);
	}

}
