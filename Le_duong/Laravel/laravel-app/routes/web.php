<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Http\Request;
=======

>>>>>>> 9b2b45acf2dc4b09feac8c994eefe2c6a249284f
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
// Route basic
Route::get('/admin',function () {
    return "Hello world";
});

// Route param
Route::get('/guest/{slug}',function ($slug) {
    return 'Guest '.$slug;
});
// Route optional param
Route::get('/guest/{username?}',function ($username = null) {
    return $username;
});
Route::get('/guest/{address?}',function ($address = 'Ha Noi') {
    return $address;
});

// Route group 
Route::prefix('admin')->group(function () {
    Route::get('/dashboard',function () {
        return "Dashboard";
    });

    Route::get('/login',function () {
        return "Login";
    });
});
// Route form get
Route::get('/registerform',function () {
    return view('registerform');
})->name('Registerform');

Route::get('/management',function (Request $request) {
    return view('management',['data' => $request->all()]);
})->name('management');

// Route form post
Route::get('/user/create',function () {
    return view('create');
})->name('create');
Route::post('/show',function (Request $request) {
    return view('show',['values'=>$request->all()]);
})->name('show');
=======
>>>>>>> 9b2b45acf2dc4b09feac8c994eefe2c6a249284f
require __DIR__.'/auth.php';
