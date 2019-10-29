<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LinkLineament
 *
 * @property int $link_id
 * @property int $lineament_id
 *
 * @property \App\Models\Lineament $lineament
 * @property \App\Models\Link $link
 *
 * @package App\Models
 */
class LinkLineament extends Model
{
	protected $table = 'link_lineament';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'link_id' => 'int',
		'lineament_id' => 'int'
	];

	public function lineament()
	{
		return $this->belongsTo(\App\Models\Lineament::class);
	}

	public function link()
	{
		return $this->belongsTo(\App\Models\Link::class);
	}
}
