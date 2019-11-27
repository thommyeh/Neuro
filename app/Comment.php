<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'content', 'user_id', 'article_id', 'molecule_id', 'lineament_id', 'created_at', 'updated_at',
    ];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function molecule()
    {
        return $this->belongsTo('App\Molecule');
    }

    public function lineament()
    {
        return $this->belongsTo('App\Lineament');
    }


}
