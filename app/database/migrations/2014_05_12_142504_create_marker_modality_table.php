<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarkerModalityTablePivot extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marker_modality', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marker_id')->unsigned()->index();
			$table->foreign('marker_id')->references('id')->on('markers')->onDelete('cascade');
			$table->integer('modality_id')->unsigned()->index();
			$table->foreign('modality_id')->references('id')->on('modalities')->onDelete('cascade');
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
		Schema::drop('marker_modality');
	}

}
