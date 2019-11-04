<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 *
 * @property int $id
 * @property int $article
 * @property int $user
 * @property string $Content
 * @property string $Datec
 *
 * @property \App\User $user
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comment';
	public $timestamps = false;



	protected $fillable = [
		'article',
		'user',
		'Content',
		'Datec'
	];

	public function article()
	{
		return $this->belongsTo(\App\Models\Article::class, 'article');
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'user');
	}
}
