<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Order\Entities\orderItem;

use Modules\Product\Entities\Product;
use Modules\Customers\Entities\Customers;


class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [];

    protected $table = 'orders';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_item', 'order_id', 'product_id');
    }

    public function customers()
    {
        return $this->belongsToMany(Customers::class, 'order_item', 'order_id', 'customer_id');
    }
    
    protected static function newFactory()
    {
        return \Modules\Order\Database\factories\OrderFactory::new();
    }
}
