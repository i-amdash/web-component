<?php

namespace App\Providers;

use App\Livewire\ContactForm;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/livewire-contact-form.php',
            'livewire-contact-form'
        );
    }

    public function boot()
    {
        // Register Livewire component
        Livewire::component('contact-form', ContactForm::class);

        // Publish config file
        $this->publishes([
            __DIR__ . '/config/livewire-contact-form.php' => config_path('livewire-contact-form.php'),
        ], 'config');

        // Publish views
        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/livewire-contact-form'),
        ], 'views');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/Views', 'livewire-contact-form');

        // Load routes if needed
        if (config('livewire-contact-form.enable_routes', false)) {
            $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        }

        // Publish assets (CSS/JS) if needed
        $this->publishes([
            __DIR__ . '/assets' => public_path('vendor/livewire-contact-form'),
        ], 'assets');
    }
}