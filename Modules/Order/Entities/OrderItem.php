<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Modules\Order\Entities\order;

class orderItem extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected $table = 'order_item';

    public function orders()
    {
        return $this->belongsTo(order::class, 'order_id', 'id');
    }
    
    protected static function newFactory()
    {
        return \Modules\Order\Database\factories\OrderItemFactory::new();
    }
}
