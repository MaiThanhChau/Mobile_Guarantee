<?php

namespace Modules\ProductSupplier\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductSupplier extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [];
    
    protected $table = 'product_suppliers';
    protected static function newFactory()
    {
        return \Modules\ProductSupplier\Database\factories\ProductSupplierFactory::new();
    }
}
