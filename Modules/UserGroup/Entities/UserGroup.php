<?php

namespace Modules\UserGroup\Entities;
use Modules\Roles\Entities\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserGroup extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    protected $table = 'user_groups';
    public function roles(){
        return $this->belongsToMany(Role::class,'user_group_role','user_group_id','role_id');
    }
    protected static function newFactory()
    {
        return \Modules\UserGroup\Database\factories\UserGroupFactory::new();
    }
}
