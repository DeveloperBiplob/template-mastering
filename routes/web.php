<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryDemoController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.master');
});

// Route::resource('category', CategoryController::class);

Route::get('category', [CategoryDemoController::class, 'index']);
Route::get('category/create', [CategoryDemoController::class, 'create']);
Route::post('category/create', [CategoryDemoController::class, 'store']);

Route::get('category/edit/{id}', [CategoryDemoController::class, 'edit']);
Route::post('category/edit/{id}', [CategoryDemoController::class, 'update']);

Route::get('category/view/{id}', [CategoryDemoController::class, 'view']);
Route::get('category/delete/{id}', [CategoryDemoController::class, 'delete']);



