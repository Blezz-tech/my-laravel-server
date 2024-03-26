<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendor
 * 
 * @property string $vend_id
 * @property string $vend_name
 * @property string|null $vend_address
 * @property string|null $vend_city
 * @property string|null $vend_state
 * @property string|null $vend_zip
 * @property string|null $vend_country
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Vendor extends Model
{
	protected $table = 'Vendors';
	protected $primaryKey = 'vend_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'vend_name',
		'vend_address',
		'vend_city',
		'vend_state',
		'vend_zip',
		'vend_country'
	];

	public function products()
	{
		return $this->hasMany(Product::class, 'vend_id');
	}
}
