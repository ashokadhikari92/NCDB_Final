<?php namespace Repo\Providers;
use App\Address;
use Illuminate\Support\ServiceProvider;
use Repo\Repositories\Address\AddressRepository;

/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/28/2015
 * Time: 11:54 AM
 */


    class AddressServiceProvider extends ServiceProvider{

        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            $this->app->bind('Repo\Repositories\Address\AddressInterface',function()
            {
                return new AddressRepository(new Address());
            });
        }
    }