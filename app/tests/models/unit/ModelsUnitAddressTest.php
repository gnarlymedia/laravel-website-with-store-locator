<?php

use Zizaco\FactoryMuff\Facade\FactoryMuff;

class ModelsUnitAddressTest extends TestCase {
	/**
	 * Test relationship with Site
	 */
	public function testRelationshipWithSite()
	{
		// Instantiate new Address
		$address = FactoryMuff::create('Address');
		
		$this->assertEquals($address->site_id, $address->site->id);
	}
	
	/**
	 * Test that site_id is required
	 */
	public function testSiteIdIsRequired()
	{
		// Create new Address
		$address = new Address;
		
		// Set the fields
		$address->addressLine1 = "Address line 1"; 
		$address->addressSuburb = "Address suburb";
		$address->addressState = "ABC";
		$address->addressPostcode = "1234";
		
		// Address should not save
		$this->assertFalse($address->save());
		
		// Save the errors
		$errors = $address->errors()->all();
		
		// There should be 1 error
		$this->assertCount(1, $errors);
		
		// The error should be set
		$this->assertEquals($errors[0], "The site id field is required.");
	}
	
	/**
	* Test that Address' fields are required
	*/
	public function testAddressFieldsAreRequired()
	{
		// Create new Address
		$address = new Address;
		
		// Create a Site
		$site = FactoryMuff::create('Site');
		$site->name = "Name";
		$site->addressLine1 = "Address line 1";
		$site->addressSuburb = "Address suburb";
		$site->addressState = "ABC";
		$site->addressPostcode = "1234";
		$site->openingHours = "Opening hours";
		$site->phone = "0312345678";
		
		// Address should not save
		$this->assertFalse($site->addresses()->save($address));
		
		// Save the errors
		$errors = $address->errors()->all();
		
		// There should be 1 error
		$this->assertCount(4, $errors);
		
		// The error should be set
		$this->assertEquals($errors, array(
			"The address line1 field is required.",
			"The address suburb field is required.",
			"The address state field is required.",
			"The address postcode field is required.",
		));
	}
	
	/**
	 * Test Address saves correctly
	 */
	public function testAddressSavesCorrectly()
	{
	  // Create a new Address
	  $address = FactoryMuff::create('Address');
	 
	  // Save the Address
	  $this->assertTrue($address->save());
	}
}