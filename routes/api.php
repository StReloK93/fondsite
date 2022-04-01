<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
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


Route::post('/login', [UserController::class, 'login']);


Route::post('/uploadimage', [ImageController::class, 'upload']);


Route::get('/pages/{page}', [PagesController::class, 'page']);


Route::get('/post/all', [PostController::class, 'getAll']);
Route::post('/post/add', [PostController::class, 'getAdd']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'getUser']);
    Route::get('/logout', [UserController::class, 'logout']);

    
    Route::post('/pages/{page}', [PagesController::class, 'pageEdit']);
});

