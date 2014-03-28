<?php

use Zizaco\FactoryMuff\Facade\FactoryMuff;

class ModelsUnitSiteTest extends TestCase {
	/**
	 * Test createPrettyMailingLabel method in Site
	 */
	public function testCreateOneLineAddressSummary()
	{
		// Instantiate new Site
		$site = FactoryMuff::create('Site');
		
		$this->assertEquals("Pretty mailing label", $site->createOneLineAddressSummary());
	}
	
	/**
	 * A validation test.
	 *
	 * @return void
	 */
	public function testSiteNameIsRequired()
	{ 
/*
		// Create a new Site
		$site = new Site;
		$site->addressLine1 = "Address line 1";
		$site->addressSuburb = "Address suburb";
		$site->addressState = "ABC";
		$site->addressPostcode = "1234";
		$site->phone = "Phone";
		
		// Site should not save
		$this->assertFalse($site->save());
		
		// Save the errors
		$errors = $site->errors()->all();
		
		// There should be 1 error
		$this->assertCount(1, $errors);
		
		// The site name error should be set
		$this->assertEquals($errors[0], "The name field is required.");
*/
	} 
}