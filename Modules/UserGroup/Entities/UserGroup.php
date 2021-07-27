<?php

namespace Modules\UserGroup\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserGroup extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    protected $table = 'user_groups';
    protected static function newFactory()
    {
        return \Modules\UserGroup\Database\factories\UserGroupFactory::new();
    }
}
