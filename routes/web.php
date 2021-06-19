<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [MainController::class, 'index']); 

Auth::routes();
Route::resource('publication', PublicationController::class)->middleware('auth');

Route::get('/home', [PublicationController::class, 'index'])->name('home');

Route::resource('publication', PublicationController::class)->middleware('auth');

Route::group(['middleware' => 'auth'] , function () {
    Route::get('/home', [PublicationController::class, 'index'])->name('home');
});


Route::get('anuncios/{id}', [MainController::class, 'show']);
