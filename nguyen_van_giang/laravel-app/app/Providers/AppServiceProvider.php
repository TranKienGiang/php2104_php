<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
=======
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
        Paginator::defaultView('partials.my-paginate');
=======
        //
>>>>>>> 9b2b45acf2dc4b09feac8c994eefe2c6a249284f
    }
}
