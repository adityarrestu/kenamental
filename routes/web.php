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

// Home Page
Route::get('/', function () {
    return view('home');
});

// Show Login Form
Route::get('/login', [UserController::class, 'login']);

// Show Login Form
Route::get('/register', [UserController::class, 'register']);

// User Authenticate
Route::post('/user/auth', [UserController::class, 'auth']);

// Create/Store New User
Route::post('/user/create', [UserController::class, 'create']);

// User Logout
Route::post('/logout', [UserController::class, 'logout']);

// Show Conseling Form
Route::get('/conseling', function () {
    return view('conseling/conseling');
});
