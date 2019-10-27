<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LineamentLink
 * 
 * @property int $lineament_id
 * @property int $link_id
 * 
 * @property \App\Models\Lineament $lineament
 * @property \App\Models\Link $link
 *
 * @package App\Models
 */
class LineamentLink extends Eloquent
{
	protected $table = 'lineament_link';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lineament_id' => 'int',
		'link_id' => 'int'
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
