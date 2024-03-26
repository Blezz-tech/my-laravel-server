<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use IntlDateFormatter;

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
    public function getOrderDate()
    {
        $formatter = new IntlDateFormatter(
            'ru_RU',
            IntlDateFormatter::FULL,
            IntlDateFormatter::FULL,
            'Europe/Moscow',
            IntlDateFormatter::GREGORIAN,
            'dd MMM yyyy, eeee'
        );
        return $formatter->format($this->order_date);
    }

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

	public function products()
	{
		return $this->belongsToMany(Product::class, 'prod_id');
	}
}
