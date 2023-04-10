<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\ItemmallController;
use App\Http\Controllers\FreemallController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Http\Request;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return redirect('/home');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/logout', function () {
        return redirect()->route('login');
    });

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});



Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/settings', [AccountController::class, 'index']);
    Route::post('/dashboard/settings', [AccountController::class, 'update']);

    Route::get('/itemmall', [ItemmallController::class, 'index'])->name('itemmall');
    Route::post('/itemmall', [ItemmallController::class, 'store']);

    Route::get('/freemall', [FreemallController::class, 'index'])->name('freemall');
    Route::post('/freemall', [FreemallController::class, 'store']);

    Route::get('/transaction', [TransactionsController::class, 'show'])->name('transaction');

    Route::get('/dashboard/admin', [AdminController::class, 'index']);
    Route::post('/dashboard/admin', [AdminController::class, 'isMaintenance']);
    Route::resource('/dashboard/admin/rps', PointsController::class)->except(['show', 'destroy', 'edit', 'update']);
    // Route::resource('/dashboard/admin/itemmall', TCategoryItemsController::class);
});
