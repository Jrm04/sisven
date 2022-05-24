<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategorieController;
use App\Http\Controllers\api\ClientController;
use App\Models\Categorie;

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