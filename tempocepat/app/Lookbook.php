<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lookbook extends Model {

	protected $table = 'lookbooks';
	protected $fillable = [
		'title ',
		'stores_id'
	];

}
