<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MoleculeLink
 *
 * @property int $molecule_id
 * @property int $link_id
 *
 * @property \App\Models\Link $link
 * @property \App\Models\Molecule $molecule
 *
 * @package App\Models
 */
class MoleculeLink extends Model
{
	protected $table = 'molecule_link';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'molecule_id' => 'int',
		'link_id' => 'int'
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
