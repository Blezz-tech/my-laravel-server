<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Good
 * 
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property float $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Good extends Model
{
	protected $table = 'goods';

	protected $casts = [
		'price' => 'float'
	];

	protected $fillable = [
		'title',
		'description',
		'price'
	];
}
