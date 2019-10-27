<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LineamentArticle
 * 
 * @property int $lineament_id
 * @property int $article_id
 * 
 * @property \App\Models\Lineament $lineament
 * @property \App\Models\Article $article
 *
 * @package App\Models
 */
class LineamentArticle extends Eloquent
{
	protected $table = 'lineament_article';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lineament_id' => 'int',
		'article_id' => 'int'
	];

	public function lineament()
	{
		return $this->belongsTo(\App\Models\Lineament::class);
	}

	public function article()
	{
		return $this->belongsTo(\App\Models\Article::class);
	}
}
