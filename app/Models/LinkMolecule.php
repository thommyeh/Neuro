<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LinkMolecule
 * 
 * @property int $link_id
 * @property int $molecule_id
 * 
 * @property \App\Models\Link $link
 * @property \App\Models\Molecule $molecule
 *
 * @package App\Models
 */
class LinkMolecule extends Eloquent
{
	protected $table = 'link_molecule';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'link_id' => 'int',
		'molecule_id' => 'int'
	];

	public function link()
	{
		return $this->belongsTo(\App\Models\Link::class);
	}

	public function molecule()
	{
		return $this->belongsTo(\App\Models\Molecule::class);
	}
}
