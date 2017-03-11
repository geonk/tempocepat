<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

// use Illuminate\Contracts\Auth\AuthorizableContract as AuthorizableContract;

use Zizaco\Entrust\Traits\EntrustUserTrait;
// use Zizaco\Entrust\HasRole;

use Validator;

class User extends Model implements AuthenticatableContract,
// AuthorizableContract,
 CanResetPasswordContract {

	use Authenticatable;
	// use Authorizable;
	use CanResetPassword;
	use EntrustUserTrait;
	// {
  //           EntrustUserTrait ::can insteadof Authorizable; //add insteadof avoid php trait conflict resolution
  //       };// This is trait for using entrust
  // HasRole;
	// {
		// add this trait to your user model
		// EntrustUserTrait ::can insteadof Authorizable; //add insteadof avoid php trait conflict resolution
	// }

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'fullname',
		'email',
		'password',
		'image',
		'role_id',
		'sex_type',
		'birthday_day',
		'birthday_month',
		'birthday_year',
		'address',
		'facebook_id',
		'avatar'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	public static $accessible = array(
		'name',
		'fullname',
		'email',
		'password',
		'image',
		'role_id',
		'sex_type',
		'birthday_day',
		'birthday_month',
		'birthday_year',
		'address',
		'facebook_id',
		'avatar'
	);

	public static $rules = array(
				'name' => 'min:1',
				'fullname' => 'required|min:3|max:32',
				'email' => 'required|email',
				'password' => 'required|min:3|confirmed',
				'password_confirmation' => 'required|min:3'
	);
	public static function validate($data) {
		return Validator::make($data, static::$rules);
	}

	public function articles()
	{
	return $this->hasMany('App\Article');
	}

	public function permissions()
	{
	return $this->belongsToMany('App\Permission')->withTimestamps();
	}


}
