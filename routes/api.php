<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CategoriesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/test', function(){

    return response()->json([

        'success' => true,
        'message' => 'Data received'


    ],200);

});


Route::get('/drugs/list', [DrugsController::class, 'drugList']);

Route::post('/brand/register', [BrandsController::class, 'storeApi']);

Route::post('/customers/register', [CustomersController::class, 'customerApi']);

Route::post('/categories/register', [CategoriesController::class, 'storeApi']);

