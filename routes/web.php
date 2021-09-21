<?php

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

Route::get('/', function () {
    return view('auth'); // apre la pagina di login per l'autenticazione, la pagina si chiama 'auth' //
});

Auth::routes();

// Route::get('/private', 'PagesController@privateSection')->middleware('auth');  per andare nella pagina privata necessito di essere loggato (controlla la pubblic function su 'PagesController' per capire come funziona) //

Route::resource('posts', PostController::class);

Route::get('/app', 'WebAppController@home'); 