<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Molecule extends Model
{
    public $timestamps = true;

    protected $fillable = [
		'designation',
		'content',
    ];

    public function lineaments()
    {
        return $this->belongsTo('App\Lineament');
    }

    public function links()
    {
        return $this->belongsTo('App\Link');
    }

    public function articles()
    {
        return $this->belongsTo('App\Article');
    }
}
