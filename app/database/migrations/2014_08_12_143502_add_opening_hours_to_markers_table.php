<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddOpeningHoursToMarkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('markers', function(Blueprint $table)
		{
			$table->string('opening_hours')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('markers', function(Blueprint $table)
		{
			$table->dropColumn('opening_hours');
		});
	}

}
