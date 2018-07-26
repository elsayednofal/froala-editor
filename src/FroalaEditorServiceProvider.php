<?php

namespace Elsayednofal\FroalaEditor;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class FroalaEditorServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        
        $this->publishes([
            __DIR__ . '/config' => config_path(''),
                ]);
        
        $this->publishes([
            __DIR__ . '/assets' => public_path('vendor/elsayednofal/froala-editor'),
                ], 'public');
        
        $this->loadViewsFrom(realpath(__DIR__ . '/views'), 'Froala');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
