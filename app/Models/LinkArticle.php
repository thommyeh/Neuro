<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LinkArticle
 * 
 * @property int $link_id
 * @property int $article_id
 * 
 * @property \App\Models\Article $article
 * @property \App\Models\Link $link
 *
 * @package App\Models
 */
class LinkArticle extends Eloquent
{
	protected $table = 'link_article';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'link_id' => 'int',
		'article_id' => 'int'
	];

	public function article()
	{
		return $this->belongsTo(\App\Models\Article::class);
	}

	public function link()
	{
		return $this->belongsTo(\App\Models\Link::class);
	}
}
