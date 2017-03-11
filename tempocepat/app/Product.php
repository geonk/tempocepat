<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Validator;

class Product extends Model {

	protected $table = 'products';
	protected $fillable = [
		'name',
		'image',
		'price',
		'sale',
		'stores_id',
		'product_categories_id'
	];

}
