<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Poslineament
 *
 * @property int $id
 * @property string $Designation
 *
 * @property \App\Models\Lineament $lineament
 * @property \Illuminate\Database\Eloquent\Collection $articles
 *
 * @package App\Models
 */
class Poslineament extends Eloquent
{
	protected $table = 'poslineament';
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
