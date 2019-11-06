<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineament extends Model
{
    public $timestamps = true;

    protected $fillable = [
		'designation',
		'classification',
		'Content',
    ];

    public function molecules()
    {
        return $this->belongsTo('App\Molecule');
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
