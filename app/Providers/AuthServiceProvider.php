<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    public static $permission = [
        'dashboard' => ['superadmin', 'admin'],
    ];
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        $this->registerPolicies();

        // Gate::define('dashboard', function (User $user) {
        //     if ($user->role == 'superadmin') {
        //         return true;
        //     }
        // });

        Gate::before(function (User $user, $ability) {

            if ($user->role == 'superadmin') {
                return true;
            }
        });

        foreach (self::$permission as $action => $roles) {
            Gate::define($action, function (User $user) use ($roles) {
                if (in_array($user->role, $roles)) {
                    return true;
                }
            });
        }
    }
}
