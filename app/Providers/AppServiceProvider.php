<?php

namespace App\Providers;

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
        //
    }

    public function mapApiRoutes()
    {
        Route::prefix('api')   // The 'api' prefix for all API routes
            ->middleware('api')   // Ensure 'api' middleware group is applied here
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
