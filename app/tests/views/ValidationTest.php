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
/*
		$this->call('GET', 'test-validation');

		$this->assertTrue($this->client->getResponse()->isOk());
		
		$this->assertResponseStatus(200);
		
		$this->assertEquals('Hello World', $this->getContent());
*/
			 
		$crawler = $this->client->request('GET', 'test-validation');
		
		$this->assertTrue($this->client->getResponse()->isOk());
		
/* 		$this->assertCount(1, $crawler->filter('h1:contains("true")')); */ 
	} 
}