<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleLineament
 *
 * @property int $article_id
 * @property int $lineament_id
 *
 * @property \App\Models\Lineament $lineament
 * @property \App\Models\Article $article
 *
 * @package App\Models
 */
class ArticleLineament extends Model
{
	protected $table = 'article_lineament';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'article_id' => 'int',
		'lineament_id' => 'int'
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
