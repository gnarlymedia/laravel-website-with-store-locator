<?php

class ViewsUnitSiteTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testCreate()
	{
		$this->call('GET', 'site/create');
		
		$this->assertResponseOk();
	} 
}