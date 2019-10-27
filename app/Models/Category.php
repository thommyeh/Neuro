<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $Title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $articles
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $table = 'category';
	public $timestamps = false;

	protected $fillable = [
		'Title'
	];

	public function articles()
	{
		return $this->belongsToMany(\App\Models\Article::class, 'category_article');
	}
}
