<?php namespace Modules\Stuff\Providers;

use Illuminate\Support\ServiceProvider;

class StuffServiceProvider extends ServiceProvider
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
            'Modules\Stuff\Repositories\StuffRepository',
            function () {
                $repository = new \Modules\Stuff\Repositories\Eloquent\EloquentStuffRepository(new \Modules\Stuff\Entities\Stuff());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Stuff\Repositories\Cache\CacheStuffDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Stuff\Repositories\CategoryRepository',
            function () {
                $repository = new \Modules\Stuff\Repositories\Eloquent\EloquentCategoryRepository(new \Modules\Stuff\Entities\Category());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Stuff\Repositories\Cache\CacheCategoryDecorator($repository);
            }
        );
// add bindings


    }
}
