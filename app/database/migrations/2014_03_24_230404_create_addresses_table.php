<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('addresses', function($table)
	    {
	        $table->increments('site_id');
	        $table->string('addressLine1');
	        $table->string('addressLine2')->nullable();
	        $table->string('addressSuburb');
	        $table->string('addressState');
	        $table->integer('addressPostcode');
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
	    Schema::drop('addresses');
	}

}
