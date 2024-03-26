<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property string $cust_id
 * @property string $cust_name
 * @property string|null $cust_address
 * @property string|null $cust_city
 * @property string|null $cust_state
 * @property string|null $cust_zip
 * @property string|null $cust_country
 * @property string|null $cust_contact
 * @property string|null $cust_email
 * 
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'Customers';
	protected $primaryKey = 'cust_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'cust_name',
		'cust_address',
		'cust_city',
		'cust_state',
		'cust_zip',
		'cust_country',
		'cust_contact',
		'cust_email'
	];

	public function orders()
	{
		return $this->hasMany(Order::class, 'cust_id');
	}
}
