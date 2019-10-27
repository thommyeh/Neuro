<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ArticleCategory
 * 
 * @property int $article_id
 * @property int $category_id
 * 
 * @property \App\Models\Category $category
 * @property \App\Models\Article $article
 *
 * @package App\Models
 */
class ArticleCategory extends Eloquent
{
	protected $table = 'article_category';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'article_id' => 'int',
		'category_id' => 'int'
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
