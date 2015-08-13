<?php namespace Modules\Warrant\Providers;

use Illuminate\Support\ServiceProvider;

class WarrantServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Warrant\Repositories\ActsRepository',
            function () {
                $repository = new \Modules\Warrant\Repositories\Eloquent\EloquentActsRepository(new \Modules\Warrant\Entities\Acts());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Warrant\Repositories\Cache\CacheActsDecorator($repository);
            }
        );

        $this->app->bind(
            'Modules\Warrant\Repositories\TypesRepository',
            function () {
                $repository = new \Modules\Warrant\Repositories\Eloquent\EloquentTypesRepository(new \Modules\Warrant\Entities\Types());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Warrant\Repositories\Cache\CacheTypesDecorator($repository);
            }
        );

// add bindings

    }
}
