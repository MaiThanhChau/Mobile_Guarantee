<?php

namespace Modules\Roles\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["title","name","group","group_title"];
    
    protected static function newFactory()
    {
        return \Modules\Roles\Database\factories\RoleFactory::new();
    }
}
