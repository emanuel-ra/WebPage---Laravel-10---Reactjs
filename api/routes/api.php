<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\V1\Auth\AuthController;
use App\Http\Controllers\V1\Web\ProductController;
use App\Http\Controllers\V1\Web\CategoryController;
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


Route::prefix('v1')->group(function () {

    Route::group([
        'middleware' => 'api',
        'prefix' => 'auth'    
    ], function ($router) {
    
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout',  [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    
    });

    Route::group([
        'prefix' => 'products'    
    ], function ($router) {    
        Route::get('get', [ProductController::class, 'Get']);    
    });

    Route::group([
        'prefix' => 'categories'    
    ], function ($router) {    
        Route::get('get', [CategoryController::class, 'Get']);    
    });

});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) { return $request->user(); });
