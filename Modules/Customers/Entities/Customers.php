<?php

namespace Modules\Customers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address', 'gioi_tinh', 'customer_group_id'];
    
    protected $table = 'customers';

    protected static function newFactory()
    {
        return \Modules\Customers\Database\factories\CustomersFactory::new();
    }
}
