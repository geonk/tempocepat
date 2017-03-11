<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

	protected $table = 'likes';
	protected $fillable = [
		'related_table',
		'related_table_id',
		'users_id',
		'users_role_id'
	];

}
