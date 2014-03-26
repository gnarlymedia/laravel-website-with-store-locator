<?php

class Contact200Test extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function tests()
	{
		$this->call('GET', 'contact');
	
		$this->assertResponseStatus(200);
	}
}