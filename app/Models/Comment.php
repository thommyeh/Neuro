<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 27 Oct 2019 09:25:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $article
 * @property int $user
 * @property string $Content
 * @property string $Datec
 * 
 * @property \App\Models\FosUser $fos_user
 *
 * @package App\Models
 */
class Comment extends Eloquent
{
	protected $table = 'comment';
	public $timestamps = false;

	protected $casts = [
		'article' => 'int',
		'user' => 'int'
	];

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

	public function fos_user()
	{
		return $this->belongsTo(\App\Models\FosUser::class, 'user');
	}
}
