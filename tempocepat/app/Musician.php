<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model {

	protected $table = 'musicians';
	protected $fillable = [
		'name',
		'description',
		'image',
		'image_cover',
		'musician_categories_id'
	];

}
