<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategorieController;
use App\Http\Controllers\api\ClientController;
use App\Http\Controllers\api\Pay_methodController;
use App\Http\Controllers\api\ProductController;
use App\Models\Pay_method;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/categories', [CategorieController::class, 'index'])->name('categories');
route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
route::delete('/categories/{category}', [CategorieController::class, 'destroy'])->name('categories.destroy');
route::get('/categories/{category}', [CategorieController::class, 'show'])->name('categories.show');
route::put('/categories/{category}', [CategorieController::class, 'update'])->name('categories.update');


route::get('/client', [ClientController::class, 'index'])->name('client');
route::post('/client', [ClientController::class, 'store'])->name('client.store');
route::delete('/client/{client}', [ClientController::class, 'destroy'])->name('client.destroy');
route::get('/client/{client}', [ClientController::class, 'show'])->name('client.show');
route::put('/client/{client}', [ClientController::class, 'update'])->name('client.update');


route::get('/products', [ProductController::class, 'index'])->name('products');
route::post('/products', [ProductController::class, 'store'])->name('products');
route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');


route::get('/paymethod', [Pay_methodController::class, 'index'])->name('paymethod');
route::post('/paymethod', [Pay_methodController::class, 'store'])->name('paymethod');
route::delete('/paymethod/{paymethod}', [Pay_methodController::class, 'destroy'])->name('paymethod');
route::get('/paymethod/{paymethod}', [Pay_methodController::class, 'show'])->name('paymethod');
route::put('/paymethod/{paymethod}', [Pay_methodController::class, 'update'])->name('paymethod');
