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
Route::get('/', [DragonBallController::class, 'index'])->name('primary.index');
Route::get('/character', [DragonBallController::class, 'character'])->name('character');
Route::get('/saga', [DragonBallController::class, 'saga'])->name('saga');
Route::get('/character/{id}', [DragonBallController::class, 'findCharacter'])->name('findCharacter');
Route::get('/saga/{id}', [DragonBallController::class, 'findSaga'])->name('findSaga');
