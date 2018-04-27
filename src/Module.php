<?php
namespace AvoRed\Brand;

use AvoRed\Brand\Widget\Brand\Widget;
use Illuminate\Support\ServiceProvider;
use AvoRed\Framework\Widget\Facade as WidgetFacade;

class Module extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerResources();
        $this->publishFiles();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Registering AvoRed featured Resource
     * e.g. Route, View, Database  & Translation Path
     *
     * @return void
     */
    protected function registerResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'avored-brand');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * Publish Files for AvoRed Brand Modules.
     *
     * @return void
     */
    public function publishFiles() {
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('themes/avored/default/vendor')
        ],'avored-module-views');
    }

}