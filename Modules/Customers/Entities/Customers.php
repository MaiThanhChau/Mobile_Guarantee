<?php

namespace Modules\Customers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Modules\Order\Entities\Order;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    protected $table = 'customers';

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }

    protected static function newFactory()
    {
        return \Modules\Customers\Database\factories\CustomersFactory::new();
    }
}
