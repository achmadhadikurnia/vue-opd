<?php

namespace Bantenprov\VueOpd;

use Illuminate\Support\ServiceProvider;
use Bantenprov\VueOpd\Console\Commands\VueOpdCommand;

/**
 * The VueOpdServiceProvider class
 *
 * @package Bantenprov\VueOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class VueOpdServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
        $this->publicHandle();
        $this->seedHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('vue-opd', function ($app) {
            return new VueOpd;
        });

        $this->app->singleton('command.vue-opd', function ($app) {
            return new VueOpdCommand;
        });

        $this->commands('command.vue-opd');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'vue-opd',
            'command.vue-opd',
        ];
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('vue-opd.php');

        $this->mergeConfigFrom($packageConfigPath, 'vue-opd');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'vue-opd-config');
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'vue-opd');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/vue-opd'),
        ], 'vue-opd-lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'vue-opd');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/vue-opd'),
        ], 'vue-opd-views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => resource_path('assets'),
        ], 'vue-opd-assets');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'vue-opd-migrations');
    }

    public function publicHandle()
    {
        $packagePublicPath = __DIR__.'/public';

        $this->publishes([
            $packagePublicPath => public_path()
        ], 'vue-opd-public');
    }

    public function seedHandle()
    {
        $packageSeedPath = __DIR__.'/database/seeds';

        $this->publishes([
            $packageSeedPath => base_path('database/seeds')
        ], 'vue-opd-seeds');
    }
}
