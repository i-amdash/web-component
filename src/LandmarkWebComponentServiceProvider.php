<?php

namespace Landmark\LandmarkWebComponent;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Landmark\LandmarkWebComponent\Http\Livewire\ContactForm;

class LandmarkWebComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/landmark-web-component.php',
            'landmark-web-component'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Register Livewire component
        Livewire::component('landmark-contact-form', ContactForm::class);

        // Publish configuration
        $this->publishes([
            __DIR__.'/../config/landmark-web-component.php' => config_path('landmark-web-component.php'),
        ], 'landmark-web-component-config');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'landmark-web-component');

        // Publish views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/landmark-web-component'),
        ], 'landmark-web-component-views');

        // Publish assets if needed
        $this->publishes([
            __DIR__.'/../resources/css' => public_path('vendor/landmark-web-component/css'),
            __DIR__.'/../resources/js' => public_path('vendor/landmark-web-component/js'),
        ], 'landmark-web-component-assets');
    }
}
