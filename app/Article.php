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
        return $this->belongsTo('App\Category');
    }

    public function lineaments()
    {
        return $this->belongsTo('App\Lineament');
    }

    public function molecules()
    {
        return $this->belongsTo('App\Molecule');
    }

    public function links()
    {
        return $this->belongsTo('App\Link');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
