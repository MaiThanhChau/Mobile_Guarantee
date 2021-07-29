<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Order\Entities\orderItem;

use Modules\Product\Entities\Product;
use Modules\Customers\Entities\Customers;
use Modules\User\Entities\User;


class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['order_note', 'cart_subtotal', 'discounted_value', 'transport_fee', 'cost_total', 'paid', 'shipping_method_id', 'payment_method_id', 'type', 'customer_name', 'customer_phone', 'customer_birthday', 'customer_address', 'customer_email', 'order_status'];

    protected $table = 'orders';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_item', 'order_id', 'product_id');
    }

    public function customers()
    {
        return $this->belongsToMany(Customers::class, 'order_item', 'order_id', 'customer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'staff_id', 'id');
    }
    
    protected static function newFactory()
    {
        return \Modules\Order\Database\factories\OrderFactory::new();
    }
}
