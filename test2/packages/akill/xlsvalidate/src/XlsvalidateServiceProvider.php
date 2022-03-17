<?php

namespace Akill\Xlsvalidate;

use Illuminate\Support\ServiceProvider;

class XlsvalidateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Akill\Xlsvalidate\Xls');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
