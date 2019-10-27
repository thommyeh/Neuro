<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MoleculeLineament
 * 
 * @property int $molecule_id
 * @property int $lineament_id
 * 
 * @property \App\Models\Lineament $lineament
 * @property \App\Models\Molecule $molecule
 *
 * @package App\Models
 */
class MoleculeLineament extends Eloquent
{
	protected $table = 'molecule_lineament';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'molecule_id' => 'int',
		'lineament_id' => 'int'
	];

	public function lineament()
	{
		return $this->belongsTo(\App\Models\Lineament::class);
	}

	public function molecule()
	{
		return $this->belongsTo(\App\Models\Molecule::class);
	}
}
