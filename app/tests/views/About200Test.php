<?php

class About200Test extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function tests()
	{
		$this->call('GET', 'about');
	
		$this->assertResponseStatus(200);
	}
}