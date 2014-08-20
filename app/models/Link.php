<?php

class Link extends Eloquent {

    /**
     * Field names
     */
    const STATUS = 'status';

    /**
     * Status values for the database
     */
    const DRAFT = 'DRAFT';
    const APPROVED = 'APPROVED';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'links';

	// Specify which of the columns can be mass assigned.
	protected $fillable = array(
		'title',
		'content',
        'url',
        'status',
	);

	// Prevents the listed columns from mass assignment
	protected $guarded = array('id');

	/**
	 * Validation rules
	 */
	public static $rules = array(
		"save" => array(
			'title' => 'required',
			'content' => 'required',
            'url' => 'required',
		),
		"create" => array(),
		"update" => array()
	);

	protected $niceNames = array(
    	'title'		=> 'Title',
    	'content'	=> 'Content',
        'url'       => 'URL'
	);
}