<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BootcampController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\BootcampController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PersonController;
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


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    Route::post('/logout',[AuthController::class, 'logout']);
    Route::get('/me',[AuthController::class, 'me']);
    return $request->user();
});


Route::resource('/person', PersonController::class);
Route::resource('/status', StatusController::class);
Route::resource('/bootcamp', BootcampController::class);
Route::resource('/role', RoleController::class);

Route::post('/signup',[AuthController::class, 'signup']);
Route::post('/login',[AuthController::class, 'login']);
Route::resource('/person', PersonController::class);
Route::resource('/status', StatusController::class);
Route::resource('/bootcamp', BootcampController::class);
Route::resource('/role', RoleController::class);

