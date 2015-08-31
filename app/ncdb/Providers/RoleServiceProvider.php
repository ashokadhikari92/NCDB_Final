<?php namespace Repo\Providers;
use App\Role;
use Illuminate\Support\ServiceProvider;
use Repo\Repositories\Role\RoleInterface;
use Repo\Repositories\Role\RoleRepository;

/**
 * Created by PhpStorm.
 * User: nOt bIG dEaL
 * Date: 6/8/2015
 * Time: 2:21 PM
 */

    class RoleServiceProvider extends ServiceProvider{

        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            $this->app->bind('Repo\Repositories\Role\RoleInterface', function()
            {
                return new RoleRepository(new Role());
            });
        }
    }