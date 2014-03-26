<?php

class Root200Test extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function tests()
	{
		// Root tests
	    $this->call('GET', '/');
	
		$this->assertResponseStatus(200);
	}
}