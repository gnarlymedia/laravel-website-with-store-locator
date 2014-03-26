<?php

class HomeBasicTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function tests()
	{
		$response = $this->call('GET', 'home');

		$this->assertTrue($this->client->getResponse()->isOk());
	}
}