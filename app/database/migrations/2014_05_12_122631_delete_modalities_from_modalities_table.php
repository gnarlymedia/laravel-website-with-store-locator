<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DeleteModalitiesFromModalitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('modalities');
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::create('modalities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('modalities')->nullable();
			$table->timestamps();
		});
	}

}
