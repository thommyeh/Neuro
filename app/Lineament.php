<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineament extends Model
{
    public $timestamps = true;

    protected $fillable = [
		'title',
		'classification',
		'Content',
    ];

    public function molecules()
    {
        return $this->belongsToMany('App\Molecule');
    }

    public function links()
    {
        return $this->belongsToMany('App\Link');
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
