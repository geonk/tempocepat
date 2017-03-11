<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $table = 'comments';
	protected $fillable = [
		'comment',
		'related_table',
		'related_table_id',
		'users_id',
		'users_role_id'
	];

}
