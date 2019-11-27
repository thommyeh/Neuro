<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryArticle
 *
 * @property int $category_id
 * @property int $article_id
 *
 * @property \App\Models\Category $category
 * @property \App\Models\Article $article
 *
 * @package App\Models
 */
class CategoryArticle extends Model
{
	protected $table = 'category_article';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'article_id' => 'int'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function article()
	{
		return $this->belongsTo(\App\Models\Article::class);
	}
}
