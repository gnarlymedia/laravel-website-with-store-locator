<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveServicesFromMarkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('markers', function(Blueprint $table)
		{
			$table->dropColumn('services');
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
			$table->string('services')->nullable();
		});
	}

}
