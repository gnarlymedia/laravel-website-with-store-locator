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
		'condition'
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
/* 	protected $hidden = array('password'); */

}