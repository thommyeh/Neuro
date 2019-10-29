<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticlePoslineament
 *
 * @property int $article_id
 * @property int $poslineament_id
 *
 * @property \App\Models\Poslineament $poslineament
 * @property \App\Models\Article $article
 *
 * @package App\Models
 */
class ArticlePoslineament extends Model
{
	protected $table = 'article_poslineament';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'article_id' => 'int',
		'poslineament_id' => 'int'
	];

	public function poslineament()
	{
		return $this->belongsTo(\App\Models\Poslineament::class);
	}

	public function article()
	{
		return $this->belongsTo(\App\Models\Article::class);
	}
}
