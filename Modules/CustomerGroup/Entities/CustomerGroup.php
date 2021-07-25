<?php

namespace Modules\CustomerGroup\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerGroup extends Model
{
    use HasFactory;

    protected $fillable = ["name"];
    
    protected $table = 'customer_group';

    protected static function newFactory()
    {
        return \Modules\CustomerGroup\Database\factories\CustomerGroupFactory::new();
    }
}
