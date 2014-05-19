<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Magniloquent\Magniloquent\Magniloquent;

class User extends Magniloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	// Specify which of the columns can be mass assigned.
	protected $fillable = array(
		'email',
		'password',
		'password_confirmation',
		'dob',
		'first_name',
		'surname',
		'phone_number'
	);

	// Prevents the listed columns from mass assignment
	protected $guarded = array('id');

	/**
	 * Validation rules
	 */
	public static $rules = array(
		"save" => array(
			'email' => 'required|email',
			'password' => 'required|min:8',
			'dob' => 'required|date_format:d/m/Y',
			'first_name' => 'required|alpha_num',
			'surname' => 'required|alpha_num',
			'phone_number' => 'required|alpha_num'
		),
		"create" => array(
			'email' => 'unique:users',
			'password' => 'confirmed',
			'password_confirmation' => 'same:password'
		),
		"update" => array()
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

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
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
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
	
	protected $niceNames = array(
    	'email'			=> 'Email address',
    	'dob'			=> 'Date of birth',
    	'first_name'	=> 'First name',
    	'surname'		=> 'Surname',
    	'phone_number'	=> 'Phone number',
    	'id'			=> 'id'
	);
	
	public function getRememberToken()
	{
	    return $this->remember_token;
	}
	
	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}
	
	public function getRememberTokenName()
	{
	    return 'remember_token';
	}
	
	public function patient()
    {
        return $this->hasMany('Patient');
    }
}