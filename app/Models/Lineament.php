<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Lineament
 * 
 * @property int $id
 * @property string $Designation
 * @property string $classification
 * @property string $Content
 * 
 * @property \Illuminate\Database\Eloquent\Collection $articles
 * @property \Illuminate\Database\Eloquent\Collection $links
 * @property \Illuminate\Database\Eloquent\Collection $molecules
 * @property \App\Models\Neglineament $neglineament
 * @property \App\Models\Poslineament $poslineament
 *
 * @package App\Models
 */
class Lineament extends Eloquent
{
	protected $table = 'lineament';
	public $timestamps = false;

	protected $fillable = [
		'Designation',
		'classification',
		'Content'
	];

	public function articles()
	{
		return $this->belongsToMany(\App\Models\Article::class, 'lineament_article');
	}

	public function links()
	{
		return $this->belongsToMany(\App\Models\Link::class, 'link_lineament');
	}

	public function molecules()
	{
		return $this->belongsToMany(\App\Models\Molecule::class, 'molecule_lineament');
	}

	public function neglineament()
	{
		return $this->hasOne(\App\Models\Neglineament::class, 'id');
	}

	public function poslineament()
	{
		return $this->hasOne(\App\Models\Poslineament::class, 'id');
	}
}
