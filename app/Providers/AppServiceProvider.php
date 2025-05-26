<?php

namespace App\Providers;
use App\Models\Permission;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // Partager le nombre total de permissions avec la vue 'navigation'
       View::composer('navigation.navigation', function ($view) {
        $permissionCount = Permission::count();
        $view->with('permissionCount', $permissionCount);
    });
    }
}
