<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	protected $table = 'events';
	protected $fillable = [
		'title ',
		'body_info',
		'image',
		'users_id',
		'users_role_id'
	];

}
