<?php

class Home200Test extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function tests()
	{
		$this->call('GET', 'home');
	
		$this->assertResponseStatus(200);
	}
}