<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Molecule
 * 
 * @property int $id
 * @property string $Designation
 * @property string $Content
 * 
 * @property \Illuminate\Database\Eloquent\Collection $articles
 * @property \Illuminate\Database\Eloquent\Collection $lineaments
 * @property \Illuminate\Database\Eloquent\Collection $links
 *
 * @package App\Models
 */
class Molecule extends Eloquent
{
	protected $table = 'molecule';
	public $timestamps = false;

	protected $fillable = [
		'Designation',
		'Content'
	];

	public function articles()
	{
		return $this->belongsToMany(\App\Models\Article::class, 'molecule_article');
	}

	public function lineaments()
	{
		return $this->belongsToMany(\App\Models\Lineament::class, 'molecule_lineament');
	}

	public function links()
	{
		return $this->belongsToMany(\App\Models\Link::class, 'molecule_link');
	}
}
