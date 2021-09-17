<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\View\Components\MyShop;
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
        //khai bao bien dung chung
        View::share('key', 'PHP2104');
        View::share('test', ['a', 'b', 'c']);

        Blade::component('my-shop', MyShop::class);

        Paginator::defaultView('pagination.my-paginate');
    }

=======
        //
    }
>>>>>>> 9b2b45acf2dc4b09feac8c994eefe2c6a249284f
}
