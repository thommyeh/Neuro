<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Link
 * 
 * @property int $id
 * @property string $Url
 * @property string $Title
 * @property \Carbon\Carbon $Datec
 * 
 * @property \Illuminate\Database\Eloquent\Collection $articles
 * @property \Illuminate\Database\Eloquent\Collection $lineaments
 * @property \Illuminate\Database\Eloquent\Collection $molecules
 *
 * @package App\Models
 */
class Link extends Eloquent
{
	protected $table = 'link';
	public $timestamps = false;

	protected $dates = [
		'Datec'
	];

	protected $fillable = [
		'Url',
		'Title',
		'Datec'
	];

	public function articles()
	{
		return $this->belongsToMany(\App\Models\Article::class, 'link_article');
	}

	public function lineaments()
	{
		return $this->belongsToMany(\App\Models\Lineament::class, 'link_lineament');
	}

	public function molecules()
	{
		return $this->belongsToMany(\App\Models\Molecule::class, 'molecule_link');
	}
}
