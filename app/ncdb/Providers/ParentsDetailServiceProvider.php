<?php namespace Repo\Providers;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 4:08 PM
 */

use App\Address;
use Illuminate\Support\ServiceProvider;
use Repo\Repositories\Address\AddressRepository;
use Repo\Repositories\ParentsDetail\ParentsDetailRepository;
use App\Parents;

/**
 * Class ParentsDetailServiceProvider
 * @package Repo\Providers
 */

class ParentsDetailServiceProvider extends ServiceProvider{

        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            $this->app->bind('Repo\Repositories\BirthDetail\ParentsDetailInterface',function()
            {
                return new ParentsDetailRepository(new Parents(),new AddressRepository(new Address()));
            });
        }
    }