<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LineamentMolecule
 *
 * @property int $lineament_id
 * @property int $molecule_id
 *
 * @property \App\Models\Lineament $lineament
 * @property \App\Models\Molecule $molecule
 *
 * @package App\Models
 */
class LineamentMolecule extends Model
{
	protected $table = 'lineament_molecule';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lineament_id' => 'int',
		'molecule_id' => 'int'
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
