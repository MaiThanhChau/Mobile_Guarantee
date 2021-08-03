<?php

namespace Modules\ImportWarehouses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Modules\ProductType\Entities\Product;


class ImportWarehouseDetail extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected $table = 'import_warehouse_detail';
    
    protected static function newFactory()
    {
        return \Modules\ImportWarehouses\Database\factories\ImportWarehouseDetailFactory::new();
    }
}
