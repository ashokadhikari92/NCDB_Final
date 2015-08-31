<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildVaccinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('child_vaccines', function(Blueprint $table)
		{
			$table->increments('chld_vcin_id');
            $table->integer('chld_vcin_vaccine_id')->unsigned();
            $table->string('chld_vcin_registration_id');
            $table->date('chld_vcin_date');
            $table->integer('chld_vcin_dose_no');
            $table->integer('chld_vcin_address')->unsigned();
            $table->string('chld_vcin_place');
            $table->integer('chld_vcin_vaccillator_id')->unsigned();
			$table->timestamps();
            $table->foreign('chld_vcin_vaccine_id')
                ->references('vcin_id')
                ->on('vaccines')
                ->onDelete('cascade');
            $table->foreign('chld_vcin_address')
                ->references('locn_id')
                ->on('locations')
                ->onDelete('cascade');
            $table->foreign('chld_vcin_vaccillator_id')
                ->references('vclr_id')
                ->on('vaccillators')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('child_vaccines');
	}

}
