<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parents', function(Blueprint $table)
		{
			$table->increments('prnt_id');
            $table->string('prnt_first_name',60);
            $table->string('prnt_last_name',60);
            $table->string('prnt_full_name_nepali',60);
            $table->string('prnt_gender',10);
            $table->string('prnt_occupation',60);
            $table->string('prnt_religion',60);
            $table->string('prnt_native_language',60);
            $table->string('prnt_education_level',60);
            $table->string('prnt_birth_country',60);
            $table->integer('prnt_address');
            $table->string('prnt_citizenship_no');
            $table->string('prnt_citizenship_issued_district',60);
            $table->boolean('prnt_is_foreigner');
            $table->string('prnt_passport_issued_country');
            $table->string('prnt_passport_no');
            $table->string('prnt_marriage_register_no');
            $table->date('prnt_marriage_date');
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
		Schema::drop('parents');
	}

}
