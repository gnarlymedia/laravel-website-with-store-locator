<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('sites', function($table)
	    {
	        $table->increments('id');
	        $table->string('name');
	        $table->string('addressLine1');
	        $table->string('addressLine2')->nullable();
	        $table->string('addressSuburb');
	        $table->string('addressState');
	        $table->integer('addressPostcode');
	        $table->string('openingHours')->nullable();
	        $table->string('phone');
	        $table->string('fax')->nullable();
	        $table->string('modalities')->nullable();
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
	    Schema::drop('sites');
	}

}
