# National Children Database (NCDB)

## Install
NCDB project can be cloned from github and installed using following command.

* git clone git@github.com:ashokadhikari92/NCDB_Final.git
* cd NCDB_Final

## Run
The app can be run with the command below:

* install the application dependencies using command: `composer install`
* copy .env.example to .env and update your the database configurations
* give write permission to the storage folder using `chmod -R 777 storage`
* run migration using `php artisan migrate`
* seed dummy data using `php artisan db:seed`
* Serve application using `php artisan serve` (append `--port PORT_NUMBER` to run in different port other than 8000).
* Access `localhost:8000` to run application on the browser.
