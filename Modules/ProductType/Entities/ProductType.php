<?php

namespace Modules\ProductType\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductType extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [];
    
    protected $table = 'product_groups';
    protected static function newFactory()
    {
        return \Modules\ProductType\Database\factories\ProductTypeFactory::new();
    }
}
