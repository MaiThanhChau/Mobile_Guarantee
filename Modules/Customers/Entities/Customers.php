<?php

namespace Modules\Customers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Modules\Order\Entities\Order;
use Modules\CustomerGroup\Entities\CustomerGroup;
class Customers extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    protected $table = 'customers';

    public function customer_group(){
        return $this->belongsTo(CustomerGroup::class, 'customer_group_id','id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }

    protected static function newFactory()
    {
        return \Modules\Customers\Database\factories\CustomersFactory::new();
    }
}
