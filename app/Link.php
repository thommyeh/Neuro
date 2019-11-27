<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public $timestamps = true;

    protected $fillable = [ 'title', 'url',];

    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }

    public function lineaments()
    {
        return $this->belongsToMany('App\Lineament');
    }

    public function molecules()
    {
        return $this->belongsToMany('App\Molecule');
    }
}
