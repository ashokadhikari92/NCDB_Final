<?php namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Repo\Repositories\Address\AddressInterface',
            'Repo\Repositories\Address\AddressRepository'
        );
        $this->app->bind(
            'Repo\Repositories\BirthDetail\BirthDetailInterface',
            'Repo\Repositories\BirthDetail\BirthDetailRepository'
        );
        $this->app->bind(
            'Repo\Repositories\ChildVaccine\ChildVaccineInterface',
            'Repo\Repositories\ChildVaccine\ChildVaccineRepository'
        );
        $this->app->bind(
            'Repo\Repositories\ParentsDetail\ParentsDetailInterface',
            'Repo\Repositories\ParentsDetail\ParentsDetailRepository'
        );
        $this->app->bind(
            'Repo\Repositories\Role\RoleInterface',
            'Repo\Repositories\Role\RoleRepository'
        );
        $this->app->bind(
            'Repo\Repositories\Vaccine\VaccineInterface',
            'Repo\Repositories\Vaccine\VaccineRepository'
        );
        $this->app->bind(
            'Repo\Repositories\VaccineProgram\VaccineProgramInterface',
            'Repo\Repositories\VaccineProgram\VaccineProgramRepository'
        );
    }
}