<?php

use  App\Http\Controllers\AuController;
use  App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::post('/login', [AuController::class, 'login']);
Route::post('/register', [AuController::class, 'register']);

Route::group(['middleware'=>'auth:api'],function(){
    Route::get('/user', [AuController::class, 'me']);
    Route::post('/logout', [AuController::class, 'logout']);

    Route::post('/movies/search', [MovieController::class, 'search']);
    Route::post('/movies', [MovieController::class, 'store']);
    Route::get('/movies', [MovieController::class, 'index']);
    Route::get('/movies/{movie}', [MovieController::class, 'show']);
    Route::put('/movies/{movie}', [MovieController::class, 'update']);
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);
});