<?php

namespace Apptotem\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function() {
            //return base_path().'/public_html';
            return base_path().'/public';

        });

        //if ($this->app->environment('local', 'testing')) {
        //    $this->app->register(DuskServiceProvider::class);
        //}
    }
}
