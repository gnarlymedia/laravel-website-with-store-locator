<?php

class ValidationTest extends TestCase {

	/**
	 * A validation test.
	 *
	 * @return void
	 */
	public function tests()
	{
	// Validation tests
		$crawler = $this->client->request('GET', 'test-validation');
		
		$this->assertTrue($this->client->getResponse()->isOk());
	} 
}