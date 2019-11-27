<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 *
 * @property int $id
 * @property string $Title
 * @property string $Content
 * @property \Carbon\Carbon $Datec
 *
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property \Illuminate\Database\Eloquent\Collection $lineaments
 * @property \Illuminate\Database\Eloquent\Collection $links
 * @property \Illuminate\Database\Eloquent\Collection $molecules
 * @property \Illuminate\Database\Eloquent\Collection $neglineaments
 * @property \Illuminate\Database\Eloquent\Collection $poslineaments
 * @property \Illuminate\Database\Eloquent\Collection $comments
 *
 * @package App\Models
 */
class Article extends Model
{
	protected $table = 'article';
	public $timestamps = false;

	protected $dates = [
		'Datec'
	];

	protected $fillable = [
		'Title',
		'Content',
		'Datec'
	];

	public function categories()
	{
		return $this->belongsToMany(\App\Models\Category::class, 'category_article');
	}

	public function lineaments()
	{
		return $this->belongsToMany(\App\Models\Lineament::class, 'lineament_article');
	}

	public function links()
	{
		return $this->belongsToMany(\App\Models\Link::class, 'link_article');
	}

	public function molecules()
	{
		return $this->belongsToMany(\App\Models\Molecule::class, 'molecule_article');
	}

	public function neglineaments()
	{
		return $this->belongsToMany(\App\Models\Neglineament::class);
	}

	public function poslineaments()
	{
		return $this->belongsToMany(\App\Models\Poslineament::class);
	}

	public function comments()
	{
		return $this->hasMany(\App\Models\Comment::class, 'article');
	}
}
