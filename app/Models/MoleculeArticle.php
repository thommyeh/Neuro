<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MoleculeArticle
 *
 * @property int $molecule_id
 * @property int $article_id
 *
 * @property \App\Models\Article $article
 * @property \App\Models\Molecule $molecule
 *
 * @package App\Models
 */
class MoleculeArticle extends Model
{
	protected $table = 'molecule_article';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'molecule_id' => 'int',
		'article_id' => 'int'
	];

	public function article()
	{
		return $this->belongsTo(\App\Models\Article::class);
	}

	public function molecule()
	{
		return $this->belongsTo(\App\Models\Molecule::class);
	}
}
