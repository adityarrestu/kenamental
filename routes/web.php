<?php

use App\Http\Controllers\KonselingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
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
Route::get('/', [WebController::class, 'index']);

// Show Login Form
Route::get('/login', [UserController::class, 'login']);

// Show Login Form
Route::get('/register', [UserController::class, 'register']);

// User Authenticate
Route::post('/user/auth', [UserController::class, 'auth']);

// Create/Store New User
Route::post('/user/create', [UserController::class, 'create']);

// User Logout
Route::post('/user/logout', [UserController::class, 'logout']);

// Show User Settings
Route::get('/user/settings', [UserController::class, 'settings']);

// Update User Data
Route::put('/user/{user}', [UserController::class, 'update']);

// Delete User Data
Route::delete('/user/destroy', [UserController::class, 'destroy']);

// Show Conseling Form
Route::get('/conseling', [KonselingController::class, 'konseling']);

// Show Conseling Detail
Route::get('/conseling/{psikolog}', [KonselingController::class, 'details']);

// Conseling Payment
Route::post('/conseling/payment', [KonselingContorller::class, 'payment']);

// Show Himitsu Login
Route::get('/auth/super', [WebController::class, 'login']);
