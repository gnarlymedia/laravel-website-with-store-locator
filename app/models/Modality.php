<?php

use Magniloquent\Magniloquent\Magniloquent;

class Modality extends Magniloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'modalities';

	// Specify which of the columns can be mass assigned.
	protected $fillable = array(
		'name'
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
	
	protected $niceNames = array(
    	'name'			=> 'Name'
	);
	
	/**
	 * Marker relationship
	 */
	public function marker()
	{
		return $this->belongsToMany('Marker');
	}
}