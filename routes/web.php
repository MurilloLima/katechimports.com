<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\{
    HomeController
};

Route::get('site/', [HomeController::class, 'index'])->name('site.index');

// newsletter
Route::get('/', [HomeController::class, 'newsletter'])->name('site.newsletter');
Route::get('send/', [HomeController::class, 'send'])->name('site.send');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
