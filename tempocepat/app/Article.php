<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

// use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model implements LogsActivityInterface {


	// use Sluggable;

	// public function sluggable()
 //    {
 //        return [
 //            'slug' => [
 //                'source' => 'title'
 //            ]
 //        ];
 //    }

	use LogsActivity;

	protected $table = 'articles';
	protected $fillable = [
		'title',
		'article',
		'image',
		'users_id',
		'users_role_id',
		'article_categories_id'
	];

	public function author()
	{
	return $this->belongsTo('App\User');
	}

	public function getActivityDescriptionForEvent($eventTitle)
	{

		if($eventTitle == 'created'){
			return 'Article "'.$this->title.'" was created';
		}
				if($eventTitle == 'updated'){
					return 'Article "'.$this->title.'" was updated';
				}
						if($eventTitle == 'deleted'){
							return 'Article "'.$this->title.'" was deleted';
						}

	return '';
	}


}
