<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirthHelperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('birth_helpers', function(Blueprint $table)
		{
			$table->increments('hlpr_id');
            $table->string('hlpr_name');
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
		Schema::drop('birth_helpers');
	}

}
