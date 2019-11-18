<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = true;


    protected $fillable = [
		'title', 'content',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function lineaments()
    {
        return $this->belongsToMany('App\Lineament');
    }

    public function molecules()
    {
        return $this->belongsToMany('App\Molecule');
    }

    public function links()
    {
        return $this->belongsToMany('App\Link');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
