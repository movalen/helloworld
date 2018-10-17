<?php 

namespace Devo\HelloWorld;

use Illuminate\Support\ServiceProvider;

class SayHelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'../config' => public_path('vendor/courier'),
        ], 'public');

        $this->publishes([
            __DIR__.'../config/courier.php' => config_path('courier.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}