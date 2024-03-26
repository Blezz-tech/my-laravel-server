<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 *
 * @property int $id
 * @property string $title
 *
 * @package App\Models
 */
class Tag extends Model
{

	protected $fillable = [
		'title'
	];
}
