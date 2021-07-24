<?php

namespace Modules\Roles\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected static function newFactory()
    {
        return \Modules\Roles\Database\factories\RoleFactory::new();
    }
}
