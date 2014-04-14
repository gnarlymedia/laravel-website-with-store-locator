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
		'username',
		'password',
		'password_confirmation'
	);

	// Prevents the listed columns from mass assignment
	protected $guarded = array('id', 'password');

	/**
	 * Validation rules
	 */
	public static $rules = array(
		"save" => array(
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:8'
		),
		"create" => array(
			'username' => 'unique:users',
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

}