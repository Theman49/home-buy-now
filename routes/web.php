<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// handle page not found
Route::redirect('/*', [PageController::class, 'default']);

// Landing Page
Route::get('/', [PageController::class, 'beranda']);
Route::get('/beranda', [PageController::class, 'beranda']);

// Auth
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/auth/loginSeller', [AuthController::class, 'login']);

// Buyer
Route::get('/primary', [BuyerController::class, 'primaryPage']);
Route::get('/secondary', [BuyerController::class, 'secondaryPage']);
Route::get('/detail/{id}', [BuyerController::class, 'detail']);
Route::get('/search', [BuyerController::class, 'search']);
// Route::post('/getsearch', [BuyerController::class, 'search']);
Route::get('/search/{query}', [BuyerController::class, 'searchByQuery']);


// Seller
Route::get('/seller', [SellerController::class, 'dashboard'])->middleware('auth');
Route::get('/seller/posts', [SellerController::class, 'posts'])->middleware('auth');
Route::get('/seller/insert', [SellerController::class, 'insert'])->middleware('auth');
Route::get('/seller/{id}/edit', [SellerController::class, 'edit'])->middleware('auth');
Route::get('/seller/preview/{id}', [SellerController::class, 'preview'])->middleware('auth');

// dashboard
Route::post('/dashboard/create', [DashboardController::class, 'createHome'])->middleware('auth');
Route::post('/dashboard/delete', [DashboardController::class, 'deleteHome'])->middleware('auth');
Route::post('/dashboard/edit', [DashboardController::class, 'editHome'])->middleware('auth');

// Route::get('/test', function() {
//     return view('test');
// });