<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('patientID');
			$table->string('medicareNumber');
			$table->string('surname');
			$table->string('firstName');
			$table->string('pensionNumber')->nullable();
			$table->string('otherNames')->nullable();
			$table->string('vetAffairsNumber')->nullable();
			$table->string('generalNote')->nullable();
			$table->string('accountingNote')->nullable();
			$table->string('medicalAlert')->nullable();
			$table->string('registrationNote')->nullable();
			$table->string('gender');
			$table->string('DOB');
			$table->string('ethnicity')->nullable();
			$table->string('homePhone')->nullable();
			$table->string('mobilePhone')->nullable();
			$table->string('workPhone')->nullable();
			$table->string('faxNumber')->nullable();
			$table->string('email')->nullable();
			$table->string('dateDeceased')->nullable();
			$table->string('address');
			$table->string('condition')->nullable();
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
		Schema::drop('patients');
	}

}
