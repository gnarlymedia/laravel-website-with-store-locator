<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class Site extends Eloquent implements RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sites';
	
	// Specify which of the columns can be mass assigned.
	protected $fillable = array(
		'name',
		'addressLine1',
		'addressLine2',
		'addressSuburb',
		'addressState',
		'addressPostcode',
		'openingHours',
		'phone',
		'fax',
		'modalities');
		
	// Prevents the listed columns from mass assignment
	protected $guarded = array('id');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * Ardent validation rules
	 */
/*
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
*/
	
	
	/**
	 * Validation rules
	 */
	public static $rules = array(
		"save" => array(),
		"create" => array(
			'name' => 'required|between:1,30',
			'addressLine1' => 'required|between:1,40',
			'addressSuburb' => 'required|between:1,30',
			'addressState' => 'required|between:2,3',
			'addressPostcode' => 'required|integer',
			'openingHours' => 'between:1,30',
			'phone' => 'required|between:1,12',
			'modalities' => 'between:1,50'
		),
		"update" => array()
	);

	  
	/**
	 * Factory
	 */
	public static $factory = array(
		'name' => 'string',
		'addressLine1' => 'string',
		'addressSuburb' => 'string',
		'addressState' => 'ABC',
		'addressPostcode' => '1234',
		'openingHours' => 'string',
		'phone' => 'string',
		'modalities' => 'string',
	);
	
	/**
	 * Get a one-line summary of the address.
	 *
	 * @return string
	 */
	public function createOneLineAddressSummary()
	{
		return "Pretty mailing label";
	}
	  
	/**
	 * Post relationship
	 */
	public function addresses() {
	  return $this->hasMany('Address');
	}	
}