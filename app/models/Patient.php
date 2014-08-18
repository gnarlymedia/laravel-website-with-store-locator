<?php

class Patient extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'patients';

	// Specify which of the columns can be mass assigned.
	protected $fillable = array(
		'patientID',
		'medicareNumber',
		'surname',
		'firstName',
		'pensionNumber',
		'otherNames',
		'vetAffairsNumber',
		'generalNote',
		'accountingNote',
		'medicalAlert',
		'registrationNote',
		'gender',
		'DOB',
		'ethnicity',
		'homePhone',
		'mobilePhone',
		'workPhone',
		'faxNumber',
		'email',
		'dateDeceased',
		'address',
		'condition',
		'user_id'
	);
	
	/**
	 * Validation rules
	 */
	public static $rules = array(
		"save" => array(
			'patientID' => 'required',
			'user_id' => 'required',
		),
		"create" => array(),
		"update" => array()
	);
	
	protected $niceNames = array(
    	'email'         => 'Email address',
    	'DOB'           => 'Date of birth',
    	'firstName'     => 'First name',
    	'surname'       => 'Surname',
    	'homePhone'     => 'Phone number',
    	'medicareNumber'=> 'Medicare number'
	);
	
	/**
	 * User relationship
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
}