<?php namespace Repo\Providers;



use App\Address;
use App\BirthDetail;
use App\Parents;
use App\Vaccine;
use Illuminate\Support\ServiceProvider;
use Repo\Repositories\Address\AddressRepository;
use Repo\Repositories\BirthDetail\BirthDetailRepository;
use Repo\Repositories\ParentsDetail\ParentsDetailRepository as Parentss;
use Repo\Repositories\VaccineProgram\VaccineProgramRepository;
use Repo\Repositories\Vaccine\VaccineRepository;

class VaccineProgramServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Repo\Repositories\VaccineProgram\VaccineProgramInterface',function()
        {
            return new VaccineProgramRepository(new VaccineRepository(new Vaccine()),new BirthDetailRepository(new Parentss(new Parents(),new AddressRepository(new Address())),new BirthDetail(),new AddressRepository(new Address())));
        });
    }
}