<?php namespace Orchestra\Support\Providers;

use Illuminate\Routing\Router;
use Orchestra\Support\Providers\Traits\FilterProviderTrait;

abstract class FilterServiceProvider extends ServiceProvider
{
    use FilterProviderTrait;

    /**
     * Bootstrap the application events.
     *
     * @param  \Illuminate\Routing\Router  $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->registerRouteFilters($router);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
