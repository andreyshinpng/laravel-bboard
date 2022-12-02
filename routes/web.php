<?php

use App\Http\Controllers\BbsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BbsController::class, 'index'])->name('home');
Route::get('/bbs/{bb}', [BbsController::class, 'detail'])->name('detail');
Route::get('/users/{user}', [UserController::class, 'userBbs'])->name('userBbs');
