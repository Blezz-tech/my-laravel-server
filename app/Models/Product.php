<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property string $prod_id
 * @property string $vend_id
 * @property string $prod_name
 * @property float $prod_price
 * @property string|null $prod_desc
 *
 * @property Vendor $vendor
 * @property Collection|OrderItem[] $order_items
 *
 * @package App\Models
 */
class Product extends Model
{
    protected $table = 'Products';
    protected $primaryKey = 'prod_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'prod_price' => 'float'
    ];

    protected $fillable = [
        'vend_id',
        'prod_name',
        'prod_price',
        'prod_desc'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vend_id');
    }

    public function orders()
    {
        return $this->belongsToMany(
            Order::class,
            'Order',
            'prod_id',
            'order_num'
        )->withPivot('quantity', 'item_price');
    }
}
