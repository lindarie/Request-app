<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
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

Route::get('/', function () {
    return view('login');
})->middleware(['auth'])->name('login');

Route::redirect('/request', 'request');
Route::resource('request', RequestController::class);

Route::redirect('/users', 'users');
Route::resource('users', UserController::class);

Route::get('comments/{id}/', [RequestController::class, 'show']);

Route::get('/create/request', function () {
    return view('create_request');
})->middleware(['auth'])->name('create_request');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
