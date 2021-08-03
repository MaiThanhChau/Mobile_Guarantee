<?php

namespace Modules\ImportWarehouses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Warehouse\Entities\Warehouse;
use Modules\Product\Entities\Product;


class ImportWarehouses extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [];

    protected $table = 'import_warehouse';

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id', 'id');
    }
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'import_warehouse_detail', 'import_warehouse_id', 'product_id')->withPivot('quantity');
    }

    protected static function newFactory()
    {
        return \Modules\ImportWarehouses\Database\factories\ImportWarehousesFactory::new();
    }
}
