<?php

class SiteNameIsRequiredTest extends TestCase {

	/**
	 * A validation test.
	 *
	 * @return void
	 */
	public function tests()
	{
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
	} 
}