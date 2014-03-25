<?php

class Address extends Eloquent {
 
 	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'addresses';
 
 	// Specify which of the columns can be mass assigned.
	protected $fillable = array('addressLine1', 'addressLine2', 'addressSuburb', 'addressState', 'addressPostcode');

	// Prevents the listed columns from mass assignment
	protected $guarded = array('id');
 
 
  public function site()
  {
    return $this->belongsTo('Site');
  }
}