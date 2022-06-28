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

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/', function () {
    return view('login');
})->middleware(['auth'])->name('login');

Route::get('/dashboard', function () {
    $locale = App::currentLocale();
    App::setLocale($locale);
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () { //autentificēti lietotāji var skatīt pieteikumus un komentārus
    Route::redirect('/request', 'request');
    Route::resource('request', RequestController::class);
    Route::get('comments/{id}/', [RequestController::class, 'show']);
});

Route::middleware('user')->group(function () { //lietotāji var izveidot pieteikumus
    Route::get('/create/request', function () {
        return view('create_request');
    });
});

Route::middleware('administrator')->group(function () { //administratori var skatīt un rediģēt lietotājus
    Route::redirect('/users', 'users');
    Route::resource('users', UserController::class);
    Route::get('/update/{id}', [UserController::class, 'createUpdate']);
    Route::post('update',[UserController::class, 'update']);
});

Route::middleware('department')->group(function () { //departments var izveidot komentārus
    Route::post('comments/', [CommentController::class, 'create']);
});
require __DIR__.'/auth.php';
