<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neglineament
 *
 * @property int $id
 * @property string $Designation
 *
 * @property \App\Models\Lineament $lineament
 * @property \Illuminate\Database\Eloquent\Collection $articles
 *
 * @package App\Models
 */
class Neglineament extends Model
{
	protected $table = 'neglineament';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
    ];
    protected $fillable = [
		'Designation'

	];

	public function lineament()
	{
		return $this->belongsTo(\App\Models\Lineament::class, 'id');
	}

	public function articles()
	{
		return $this->belongsToMany(\App\Models\Article::class);
	}
}
