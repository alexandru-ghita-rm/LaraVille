<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\AddPropertyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\PostPropertyController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Models\Ad;
use App\Models\Category;
use App\Models\User;
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

Route::get('/', [AdController::class, 'index'])->name('home');

Route::get('ads/{ad:slug}', [PropertyController::class, 'show'])->name('property');

Route::get('categories/{category:slug}', [CategoryController::class, 'index'])->name('category');

Route::get('sellers/{seller:username}', function (User $seller) {
    return view('ads', [
        'ads' => $seller->ads,
        'categories' => Category::all()
    ]);
});

Route::get('sign-up', [RegisterController::class, 'index'])->name('register');
Route::post('sign-up', [RegisterController::class, 'store']);
Route::post('logout', [LogoutController::class, 'store'])->name('logout');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::get('dashboard', [DashboardController::class, 'index'])->name('my-account');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('add-listing', [ListController::class, 'index'])->name('add');
