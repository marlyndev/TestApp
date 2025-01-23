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

        Route::get('drugs/delete{id}','destroy')->name('drugs.delete');

         //view
         Route::get('drugs/view{id}','show')->name('drugs.view');
         Route::get('drugs/edit/{id}','edit')->name('drugs.edit');
         Route::post('drugs/update','update')->name('drugs.update');

    });

    Route::controller(CategoriesController::class)->group(function(){

        Route::get('categories/create', 'create')->name('categories.create');
        Route::get('categories/list', 'index')->name('categories.index');
        Route::post('categories/store','store')->name('categories.store');

        Route::get('categories/delete{id}','destroy')->name('categories.delete');

        //view
        Route::get('categories/view{id}','show')->name('categories.view');
        Route::get('categories/edit{id}','edit')->name('categories.edit');
        Route::post('categories/update','update')->name('categories.update');
    });

    Route::controller(CustomersController::class)->group(function(){

        //customer route
        Route::get('customers/create', 'create')->name('customers.create');
        Route::get('customers/list', 'index')->name('customers.index');
        Route::post('customers/store', 'store')->name('customers.store');

        Route::get('customers/delete{id}','destroy')->name('customers.delete');

        //view
        Route::get('customers/view{id}','show')->name('customers.view');
        Route::get('customers/edit{id}','edit')->name('customers.edit');
        Route::post('customers/update','update')->name('customers.update');

    });

    Route::controller(BrandsController::class)->group(function(){

        //brands route
        Route::get('brands/create', 'create')->name('brands.create');
        Route::get('brands/list', 'index')->name('brands.index');
        Route::post('brands/store','store')->name('brands.store');

        Route::get('brands/delete{id}','destroy')->name('brands.delete');

        //view
        Route::get('brands/view{id}','show')->name('brands.view');
        Route::get('brands/edit{id}','edit')->name('brands.edit');
        Route::post('brands/update','update')->name('brands.update');

    });

});


