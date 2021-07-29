<?php

namespace Modules\User\Entities;
use Modules\UserGroup\Entities\UserGroup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phone','user_group_id','address','password'];
    
    protected $table = 'users';
    protected static function newFactory()
    {
        return \Modules\UserGroup\Database\factories\UserFactory::new();
    }
    public function user_group() {
        return $this->belongsTo(UserGroup::class,'user_group_id','id');
    }
}
