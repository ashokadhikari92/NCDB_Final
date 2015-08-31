<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccineDosesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vaccine_doses', function(Blueprint $table)
		{
			$table->increments('dose_id');
            $table->integer('dose_vaccine_id')->unsigned();
            $table->integer('dose_vaccine_dose_no');
            $table->string('dose_interval');
			$table->integer('years');
			$table->integer('months');
			$table->integer('days');
			$table->timestamps();
            $table->foreign('dose_vaccine_id')
                ->references('vcin_id')
                ->on('vaccines')
                ->onDelete('cascade');
			$table->integer('created_by')->unsigned();
			$table->foreign('created_by')->references('id')->on('users')->onDelete('CASCADE');
			$table->integer('updated_by')->unsigned();
			$table->foreign('updated_by')->references('id')->on('users')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vaccine_doses');
	}

}
