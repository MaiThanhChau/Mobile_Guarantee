<?php
namespace Modules\ProductType\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ProductTypeModel extends Model
{
    use HasFactory;
    protected $table = 'product_groups';
}