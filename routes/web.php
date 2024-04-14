<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Auth::routes();
Route::post('/check', [Controller::class, 'Api'])->name('check');
Route::get('/home', [App\Http\Controllers\Controller::class, 'DisplayItems'])->name('home')->middleware('auth');
// Route::get('/register', [App\Http\Controllers\Controller::class, 'DisplayItems'])->name('register')->middleware('auth');
route::post('/save', [Controller::class, 'Save'])->name('save');
route::post('/feedback', [Controller::class, 'feedbacksave'])->name('feedback');
route::post('/api', [Controller::class, 'api'])->name('api');