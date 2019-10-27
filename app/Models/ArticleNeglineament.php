<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ArticleNeglineament
 * 
 * @property int $article_id
 * @property int $neglineament_id
 * 
 * @property \App\Models\Neglineament $neglineament
 * @property \App\Models\Article $article
 *
 * @package App\Models
 */
class ArticleNeglineament extends Eloquent
{
	protected $table = 'article_neglineament';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'article_id' => 'int',
		'neglineament_id' => 'int'
	];

	public function neglineament()
	{
		return $this->belongsTo(\App\Models\Neglineament::class);
	}

	public function article()
	{
		return $this->belongsTo(\App\Models\Article::class);
	}
}
