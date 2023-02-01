<?php

use App\Http\Controllers\KonselingController;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\TestimoniController;
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
Route::get('/login', [UserController::class, 'login'])->name('login');

// Show Login Form
Route::get('/register', [UserController::class, 'register']);

// User Authenticate
Route::post('/user/auth', [UserController::class, 'auth']);

// Create/Store New User
Route::post('/user/create', [UserController::class, 'create']);

// User Route
Route::middleware(['auth', 'user-role:user'])->group(function ()
{
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
});

// Admin Route
Route::middleware(['auth', 'user-role:admin'])->group(function () {

    // Show Dashboard
    Route::get('/sp/dashboard', [WebController::class, 'dashboard']);

    // Show Psikolog Register Form
    Route::get('/sp/psikolog/register', [PsikologController::class, 'register']);

    // Create New Psikolog Data
    Route::post('/sp/psikolog/create', [PsikologController::class, 'create']);

    // Show Psikolog Data Edit Form
    Route::get('/sp/psikolog/{psikolog}', [PsikologController::class, 'edit']);

    // Update Psikolog Data
    Route::put('/sp/psikolog/{psikolog}', [PsikologController::class, 'update']);

    // Delete Psikolog Data
    Route::delete('/sp/psikolog/{psikolog}', [PsikologController::class, 'destroy']);

    // Create New Testimoni
    Route::post('/sp/testimoni/create', [TestimoniController::class, 'create']);

    // Delete Testimoni
    Route::delete('/sp/testimoni/{testimoni}', [TestimoniController::class, 'destroy']);
});


