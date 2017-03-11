<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model {

	protected $table = 'logs';
	protected $fillable = [
		'related_table',
		'related_table_id',
		'log_actions_id',
		'users_id',
		'users_role_id'
	];

}
