<?php

use App\Http\Controllers\BbsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [BbsController::class, 'index'])->name('home');
Route::get('/bbs/{bb}', [BbsController::class, 'detail'])->name('bb.detail');
Route::get('/users/{user}', [UserController::class, 'userBbs'])->name('user.bbs');;
Route::get('/categories/{category}', [CategoryController::class, 'categoryBbs'])->name('category.bbs');

Route::get('/profile', [HomeController::class, 'index'])->name('profile');
Route::get('/profile/create', [HomeController::class, 'create'])->name('bb.create');
Route::post('/profile/store', [HomeController::class, 'store'])->name('bb.store');
Route::get('/profile/{bb}/edit', [HomeController::class, 'edit'])->name('bb.edit')->middleware('can:update,bb');
Route::patch('/profile/{bb}', [HomeController::class, 'update'])->name('bb.update')->middleware('can:update,bb');
Route::get('/profile/{bb}/delete', [HomeController::class, 'delete'])->name('bb.delete')->middleware('can:destroy,bb');
Route::delete('/profile/{bb}', [HomeController::class, 'destroy'])->name('bb.destroy')->middleware('can:destroy,bb');
