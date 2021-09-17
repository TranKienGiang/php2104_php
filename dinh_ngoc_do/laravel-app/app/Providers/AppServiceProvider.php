<?php

namespace App\Providers;

<<<<<<< HEAD
use App\View\Components\Alert;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
=======
use Illuminate\Support\ServiceProvider;
>>>>>>> 9b2b45acf2dc4b09feac8c994eefe2c6a249284f

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        View::share('info', ['Do', '18', 'B15']);

        Blade::component('package-alert', Alert::class);
        /* Blade::component('my-app-layout', MyAppLayout::class); */
=======
        //
>>>>>>> 9b2b45acf2dc4b09feac8c994eefe2c6a249284f
    }
}
