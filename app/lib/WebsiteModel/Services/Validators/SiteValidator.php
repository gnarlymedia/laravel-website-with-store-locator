<?php namespace WebsiteModel\Services\Validators;
 
class User extends Validator {
 
  /**
   * Validation rules
   */
  public static $rules = array(
	'name' => 'required|between:1,30',
	'addressLine1' => 'required|between:1,40',
	'addressSuburb' => 'required|between:1,30',
	'addressState' => 'required|between:2,3',
	'addressPostcode' => 'required|integer',
	'openingHours' => 'between:1,30',
	'phone' => 'required|between:1,12',
	'modalities' => 'between:1,50'
  );
}