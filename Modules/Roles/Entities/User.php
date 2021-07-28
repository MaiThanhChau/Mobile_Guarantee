<?php

namespace Modules\Roles\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\UserGroup\Entities\UserGroup;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['name','email','phone','user_group_id','address','password'];

    protected static function newFactory()
    {
        return \Modules\Roles\Database\factories\RoleFactory::new();
    }

    public function user_group() {
        return $this->belongsTo(UserGroup::class,'user_group_id','id');
    }
}
