<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Auth;

use Modules\Roles\Entities\Role;
use Modules\Roles\Entities\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-post', function (User $user, Post $post) {
        //     return $user->id === $post->user_id;
        // });

        $user = Auth::user();
        //$user_roles = Auth::user()->user_group->roles->pluck('name','id')->toArray();
        $roles = Role::all()->pluck('name','id')->toArray();
        foreach ($roles as $role) {
            Gate::define($role, function ($user,$action) {
                $user_roles = $user->user_group->roles->pluck('name','id')->toArray();
                if( in_array($action, $user_roles) ){
                    return true;
                }
                return false;
            });
        }

        
    }
}
