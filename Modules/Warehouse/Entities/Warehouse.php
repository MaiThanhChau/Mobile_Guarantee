<?php

namespace Modules\Warehouse\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address', 'code', 'status','import', 'export'];
    protected $table = 'warehouse';
    protected static function newFactory()
    {
        return \Modules\Warehouse\Database\factories\WarehouseFactory::new();
    }
}
