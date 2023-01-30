<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController as Auth;

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
Route::get('/reset', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});

Route::post('/login', [Auth::class, 'login'])->name('login');
Route::post('/register', [Auth::class, 'register']);

Route::middleware(['jwt.verify'])->group(function() {
    Route::post('/logout', [Auth::class, 'logout']);
    Route::post('/refresh', [Auth::class, 'refresh']);
    Route::get('/user-profile', [Auth::class, 'userProfile'])->middleware(['jwt.verify']);
    Route::post('/change-pass', [Auth::class, 'changePassWord']);
});

