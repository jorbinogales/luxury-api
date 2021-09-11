<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\VisitController;

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

Route::middleware('api')->group(function(){

    /* PEOPLE */
    Route::prefix('people')->group(function(){

        Route::post('', [PeopleController::class, 'store']);

    });
    Route::prefix('visit')->group(function(){

        Route::post('', [VisitController::class, 'store']);
        
    });

});

Route::middleware('auth:api')->get('/user', function (Request $request) {


     /* PEOPLE */
    Route::prefix('people')->group(function(){
        Route::post('', [PeopleController::class, 'store']);
    });
    Route::prefix('visit')->group(function(){
        Route::post('', [VisitController::class, 'store']);
    });

        return $request->user();
});
