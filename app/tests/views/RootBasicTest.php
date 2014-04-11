<?php

class RootBasicTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function tests()
	{
		$response = $this->call('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}
}