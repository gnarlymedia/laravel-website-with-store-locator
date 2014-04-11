<?php

class ViewsUnitSiteTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testCreate()
	{
		$this->call('GET', 'user/create');
		
		$this->assertResponseOk();
	} 
}