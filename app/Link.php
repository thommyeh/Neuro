<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public $timestamps = true;

    protected $fillable = [ 'title', 'url',];

    public function articles()
    {
        return $this->belongsTo('App\Article');
    }

    public function lineaments()
    {
        return $this->belongsTo('App\Lineament');
    }

    public function molecules()
    {
        return $this->belongsTo('App\Molecule');
    }
}
