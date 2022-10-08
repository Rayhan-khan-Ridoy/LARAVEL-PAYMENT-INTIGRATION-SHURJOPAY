<?php

namespace Ridoy\Calcpackage;

use Illuminate\Support\ServiceProvider;

class CalcServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->make('Ridoy\Calcpackage\Http\Controllers\calController');
        $this-> loadViewsFrom(__DIR__.'/views', 'calc');
    }


    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ .'/routes/web.php');
    }
}
