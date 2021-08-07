<?php

namespace Modules\SaleOff\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SaleOff extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'price_type', 'description', 'status', 'apply','kind_of_discount', 'product_id','reduced_value','reduction_limit'];
    protected $table = 'sale_offs';
    
    protected static function newFactory()
    {
        return \Modules\SaleOff\Database\factories\SaleOffFactory::new();
    }
}
