<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 * 
 * @property int $order_num
 * @property int $order_item
 * @property string $prod_id
 * @property int $quantity
 * @property float $item_price
 * 
 * @property Order $order
 * @property Product $product
 *
 * @package App\Models
 */
class OrderItem extends Model
{
	protected $table = 'OrderItems';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'order_num' => 'int',
		'order_item' => 'int',
		'quantity' => 'int',
		'item_price' => 'float'
	];

	protected $fillable = [
		'prod_id',
		'quantity',
		'item_price'
	];

	public function order()
	{
		return $this->belongsTo(Order::class, 'order_num');
	}

	public function product()
	{
		return $this->belongsTo(Product::class, 'prod_id');
	}
}
