<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});

Route::post('/', [UserController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [UserController::class, 'register']);
Route::get('/dashboard',function(){
    return view('dashboard');
});
Route::post('/salir', [UserController::class, 'salir']);