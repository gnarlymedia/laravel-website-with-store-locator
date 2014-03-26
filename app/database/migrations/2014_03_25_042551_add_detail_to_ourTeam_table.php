<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddDetailToOurTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ourTeam', function(Blueprint $table)
		{
			$table->string('detail')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ourTeam', function(Blueprint $table)
		{
			$table->dropColumn('detail');
		});
	}

}
