<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $order_num
 * @property Carbon $order_date
 * @property string $cust_id
 * 
 * @property Customer $customer
 * @property Collection|OrderItem[] $order_items
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'Orders';
	protected $primaryKey = 'order_num';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'order_num' => 'int',
		'order_date' => 'datetime'
	];

	protected $fillable = [
		'order_date',
		'cust_id'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class, 'cust_id');
	}

	public function order_items()
	{
		return $this->hasMany(OrderItem::class, 'order_num');
	}
}
