<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReformController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemenuhanController;
use App\Http\Controllers\FileReformController;
use App\Http\Controllers\FilePemenuhanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





// Publicly accessible routes
Route::get('/',[HomeController::class, 'home']);



// Routes for guests only
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});


// Routes for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/beranda',[BerandaController::class, 'beranda'])->name('beranda');

    Route::get('/reform',[ReformController::class, 'reform'])->name('reform');
    Route::get('/pemenuhan',[PemenuhanController::class, 'pemenuhan']);
    Route::get('/file-reform',[FileReformController::class, 'filereform']);
    Route::get('/file-pemenuhan ',[FilePemenuhanController::class, 'filepemenuhan']);
    
    
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    Route::post('/logout', [LogoutController::class, 'perform'])->name('logout');
});


