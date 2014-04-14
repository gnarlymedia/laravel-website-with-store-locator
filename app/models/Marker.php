<?php

use Magniloquent\Magniloquent\Magniloquent;

class Marker extends Magniloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'markers';

	// Specify which of the columns can be mass assigned.
	protected $fillable = array(
		'name',
		'address',
		'lat',
		'lng'
	);

	// Prevents the listed columns from mass assignment
	protected $guarded = array('id');

	/**
	 * Validation rules
	 */
	public static $rules = array(
		"save" => array(
			'name' => 'required',
			'address' => 'required',
			'lat' => 'required',
			'lng' => 'required'
		),
		"create" => array(),
		"update" => array()
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array(
	);
}