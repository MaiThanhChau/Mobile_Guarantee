<?php
namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\ProductSupplier\Entities\ProductSupplier;
use Modules\ProductType\Entities\ProductType;
class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["name","sku","group_product_id","supplier_product_id","status","image","description","buy_price","sell_price","guarantee_time"];
    
    protected $table = 'products';
    public function group_product(){
        return $this->belongsTo(ProductType::class,'group_product_id','id');
    }
    public function supplier_product(){
        return $this->belongsTo(ProductSupplier::class,'supplier_product_id','id');
    }
    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new();
    }
}
