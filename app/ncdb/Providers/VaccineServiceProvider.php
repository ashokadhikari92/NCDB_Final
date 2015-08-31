<?php namespace Repo\Providers;




use App\Vaccine;
use Orchestra\Support\Providers\ServiceProvider;
use Repo\Repositories\Vaccine\VaccineRepository;

class VaccineServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Repo\Repositories\Vaccine\VaccineInterface',function()
        {
            return new VaccineRepository(new Vaccine());
        });
    }
}