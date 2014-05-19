<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveModalitiesFromModalitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('modalities', function(Blueprint $table)
		{
			$table->dropColumn('modalities');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('modalities', function(Blueprint $table)
		{
			$table->string('modalities')->nullable();
		});
	}

}
