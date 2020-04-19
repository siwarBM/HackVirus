<?php namespace October\Rain\Foundation\Providers;

use Illuminate\Support\ServiceProvider;
use October\Rain\Foundation\Maker;

class MakerServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Maker::class);
    }
}
