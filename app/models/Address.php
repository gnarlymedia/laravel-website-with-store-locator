<?php

use LaravelBook\Ardent\Ardent;

class Address extends Ardent {
 
 	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'addresses';
 
 	// Specify which of the columns can be mass assigned.
	protected $fillable = array(
		'addressLine1',
		'addressLine2',
		'addressSuburb',
		'addressState',
		'addressPostcode'
	);

	// Prevents the listed columns from mass assignment
	protected $guarded = array('id');
 
 	/**
	 * Ardent validation rules
	 */
	public static $rules = array(
		'site_id' => 'required',
		'addressLine1' => 'required|between:1,40',
		'addressSuburb' => 'required|between:1,30',
		'addressState' => 'required|between:2,3',
		'addressPostcode' => 'required|integer',
	);
 
	 /**
	 * Factory
	 */
	public static $factory = array(
		'addressLine1' => 'string',
		'addressSuburb' => 'string',
		'addressState' => 'ABC',
		'addressPostcode' => '1234',
		'site_id' => 'factory|Site',
	);
 
	public function site()
	{
		return $this->belongsTo('Site');
	}
}