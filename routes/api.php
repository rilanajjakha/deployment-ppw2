<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\InfoController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\GalleryController;

Route::get('/gallery', [GalleryController::class, 'apiIndex'])->name('api.gallery');
Route::get('/greet', [GreetController::class, 'greet'])->name('greet');
Route::get('/info', [InfoController::class, 'index'])->name('info');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
