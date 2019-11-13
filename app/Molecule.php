<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Molecule extends Model
{
    public $timestamps = true;

    protected $fillable = [
		'title',
		'content',
    ];

    public function lineaments()
    {
        return $this->belongsToMany('App\Lineament');
    }

    public function links()
    {
        return $this->belongsToMany('App\Link');
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
