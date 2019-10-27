<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ArticleMolecule
 * 
 * @property int $article_id
 * @property int $molecule_id
 * 
 * @property \App\Models\Article $article
 * @property \App\Models\Molecule $molecule
 *
 * @package App\Models
 */
class ArticleMolecule extends Eloquent
{
	protected $table = 'article_molecule';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'article_id' => 'int',
		'molecule_id' => 'int'
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
