<?php

namespace LaravelRocket\Foundation\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        /* Helpers */
        $this->app->singleton(\LaravelRocket\Foundation\Helpers\DateTimeHelperInterface::class,
            \LaravelRocket\Foundation\Helpers\Production\DateTimeHelper::class);

        $this->app->singleton(\LaravelRocket\Foundation\Helpers\LocaleHelperInterface::class,
            \LaravelRocket\Foundation\Helpers\Production\LocaleHelper::class);

        $this->app->singleton(\LaravelRocket\Foundation\Helpers\URLHelperInterface::class,
            \LaravelRocket\Foundation\Helpers\Production\URLHelper::class);

        $this->app->singleton(\LaravelRocket\Foundation\Helpers\CollectionHelperInterface::class,
            \LaravelRocket\Foundation\Helpers\Production\CollectionHelper::class);

        $this->app->singleton(\LaravelRocket\Foundation\Helpers\StringHelperInterface::class,
            \LaravelRocket\Foundation\Helpers\Production\StringHelper::class);

        $this->app->singleton(\LaravelRocket\Foundation\Helpers\PaginationHelperInterface::class,
            \LaravelRocket\Foundation\Helpers\Production\PaginationHelper::class);

        $this->app->singleton(\LaravelRocket\Foundation\Helpers\TypeHelperInterface::class,
            \LaravelRocket\Foundation\Helpers\Production\TypeHelper::class);

        $this->app->singleton(\LaravelRocket\Foundation\Helpers\RedirectHelperInterface::class,
            \LaravelRocket\Foundation\Helpers\Production\RedirectHelper::class);
    }
}
