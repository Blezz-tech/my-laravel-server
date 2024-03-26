<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostTag
 * 
 * @property int $post_id
 * @property int $tag_id
 *
 * @package App\Models
 */
class PostTag extends Model
{
	protected $table = 'post_tag';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int',
		'tag_id' => 'int'
	];

	protected $fillable = [
		'post_id',
		'tag_id'
	];
}
