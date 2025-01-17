<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\BrandsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


// Route::get('/register', function () {
//     return view('authentication.register');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Auth::routes();



Route::prefix('dashboard')->middleware('auth')->group( function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::controller(DrugsController::class)->group(function() {

        Route::get('drugs/create', 'create')->name('drugs.create');
        Route::get('drugs/list','index')->name('drugs.index');
        Route::post('drugs/store','store')->name('drugs.store');

    });

    Route::controller(CategoriesController::class)->group(function(){

        Route::get('categories/create', 'create')->name('categories.create');
        Route::get('categories/list', 'index')->name('categories.index');
        Route::post('categories/store','store')->name('categories.store');
    });

    Route::controller(CustomersController::class)->group(function(){

        //customer route
        Route::get('customers/create', 'create')->name('customers.create');
        Route::get('customers/list', 'index')->name('customers.index');
        Route::post('customers/store', 'store')->name('customers.store');

        //view
        Route::get('customers/view{id}','show')->name('customers.view');

    });

    Route::controller(BrandsController::class)->group(function(){

        //brands route
        Route::get('brands/create', 'create')->name('brands.create');
        Route::get('brands/list', 'index')->name('brands.index');
        Route::post('brands/store','store')->name('brands.store');

    });

});


