<?php

class BasicCrawlerRootTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function tests()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}
}