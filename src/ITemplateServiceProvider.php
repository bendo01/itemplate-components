<?php
declare (strict_types = 1);

namespace Bendo01\ITemplateComponents;

use Illuminate\Support\ServiceProvider;

class ITemplateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'itemplate');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/itemplate'),
        ], 'views');
    }
    /**
     * Register any package services.
     */
    public function register()
    {
    }
}
