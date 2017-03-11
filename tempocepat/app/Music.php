<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model {

	protected $table = 'musics';
	protected $fillable = [
		'title',
		'description',
		'users_id',
		'users_role_id',
		'musician_id',
		'music_categories_id'
	];

}
