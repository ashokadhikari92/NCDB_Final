<?php namespace Repo\Providers;


use Illuminate\Support\ServiceProvider;
use Repo\Repositories\ChildVaccine\ChildVaccineRepository;
use App\ChildVaccine;

class ChildVaccineServiceProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Repo\Repositories\ChildVaccine\ChildVaccineInterface',function()
        {
            return new ChildVaccineRepository(new ChildVaccine());
        });
    }
}