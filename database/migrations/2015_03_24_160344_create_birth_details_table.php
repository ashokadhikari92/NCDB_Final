<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirthDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('birth_details', function(Blueprint $table)
		{
			$table->increments('brth_id');
            $table->string('brth_registration_id');
            $table->string('brth_first_name',60);
            $table->string('brth_middle_name');
            $table->string('brth_last_name',60);
            $table->string('brth_full_name_nepali',60);
            $table->date('brth_birth_date_bs');
            $table->date('brth_birth_date_ad');
            $table->string('brth_birth_place',60);
            $table->string('brth_birth_helper',60);
            $table->string('brth_gender',10);
            $table->string('brth_birth_type',10);
            $table->string('brth_caste',50);
            $table->boolean('brth_handicap');
            $table->string('brth_handicap_type',60);
            $table->integer('brth_birth_address');
            $table->boolean('brth_is_born_in_foreign');
            $table->string('brth_country_name',60);
            $table->dateTime('brth_registered_date');
            $table->string('brth_father');
            $table->string('brth_mother');
            $table->string('brth_grand_father');
            $table->string('brth_grand_mother');
            $table->integer('brth_registered_by');
            $table->string('brth_informed_by');
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('CASCADE');
            $table->integer('updated_by')->unsigned();
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('CASCADE');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('birth_details');
	}

}
