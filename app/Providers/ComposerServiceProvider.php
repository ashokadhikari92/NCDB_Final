<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        View::composer('layouts.sideMenu','App\Http\Composers\SideMenuComposer');
		View::composer('layouts1.*','App\Http\Composers\SideMenuComposer');
		View::composer('layouts.*','App\Http\Composers\SideMenuComposer');
		View::composer('auth.register','App\Http\Composers\RegisterUserComposer');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
