<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 * 
 * @property int $id
 * @property string $name
 * @property string $path
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $description
 *
 * @package App\Models
 */
class Photo extends Model
{
	protected $table = 'photos';

	protected $fillable = [
		'name',
		'path',
		'description'
	];
}
