<?php

namespace Modules\Roles\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["title","name","group"];
    
    protected static function newFactory()
    {
        return \Modules\Roles\Database\factories\RoleFactory::new();
    }
}
