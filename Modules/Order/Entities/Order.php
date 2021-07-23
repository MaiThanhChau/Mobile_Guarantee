<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Order\Entities\orderItem;


class order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [];

    protected $table = 'orders';

    public function orderItem()
    {
        return $this->hasMany(orderItem::class, 'order_id', 'id');
    }
    
    protected static function newFactory()
    {
        return \Modules\Order\Database\factories\OrderFactory::new();
    }
}
