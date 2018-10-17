<?php 

namespace Devo\HelloWorld;

use Illuminate\Support\ServiceProvider;

class SayHelloServiceProvider extends ServiceProvider
{
    protected $defer = true;
    
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    public static function world()
    {
        return 'Hello World, Composer!';
    }
}