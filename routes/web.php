<?php

use App\Http\Controllers\CarCategoryController;
use App\Http\Controllers\CarReqController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicePackController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'index']);
Route::get('/dashboard', function(){
    return view('dashboard.dashboard');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'] );


Route::get("/register", [RegisterController::class, 'index'])->middleware('guest');
Route::post("/register", [RegisterController::class, 'store']);


Route::resource('/dashboard/carcategories',CarCategoryController::class );

Route::resource('/dashboard/carrequirements',CarReqController::class );

Route::resource('/dashboard/carexamples',CarController::class );

Route::resource('/dashboard/services',ServiceController::class );

Route::resource('/dashboard/servicePackages',ServicePackController::class );

Route::resource('/dashboard/packs',PackController::class );

Route::resource('/dashboard/users', UController::class );
Route::post('/dashboard/users', [UController::class, 'store'] );


