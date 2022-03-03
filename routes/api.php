<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DragonBallController;

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

/**
/--------------------------------------------------------------------------
| Routes for the API
/--------------------------------------------------------------------------
/ Route / is the principal route of the API
*/
Route::get('/', [DragonBallController::class, 'index'])->name('primary.index');
/*
/ Route /character is the route to show the characters in the API
*/
Route::get('/character', [DragonBallController::class, 'character'])->name('character');
/*
/ Route /saga is the route to show the sagas in the API
*/
Route::get('/saga', [DragonBallController::class, 'saga'])->name('saga');
/*
/ Route /character/{id} is the route to show the characters by id in the API
*/
Route::get('/character/{id}', [DragonBallController::class, 'findCharacter'])->name('findCharacter');
/*
/ Route /saga/{id} is the route to show the sagas by id in the API
*/
Route::get('/saga/{id}', [DragonBallController::class, 'findSaga'])->name('findSaga');
