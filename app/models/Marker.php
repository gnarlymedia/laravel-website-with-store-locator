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
        'openinghours',
        'phone',
        'fax',
		'lat',
		'lng',
		'services'
	);

	// Prevents the listed columns from mass assignment
	protected $guarded = array('id');

	/**
	 * Validation rules
	 */
	public static $rules = array(
		"save" => array(
			'name' => 'required'
		),
		"create" => array(),
		"update" => array()
	);

	public function modalities()
    {
        return $this->belongsToMany('Modality');
    }
}