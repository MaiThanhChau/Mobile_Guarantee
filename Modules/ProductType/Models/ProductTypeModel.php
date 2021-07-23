<?php
namespace Modules\ProductType\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProductTypeModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product_groups';
}