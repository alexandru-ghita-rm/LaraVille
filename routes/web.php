<?php

use App\Http\Controllers\AboutController;
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

Route::get('/', [\App\Http\Controllers\AdController::class, 'index'])->name('home');

Route::get('ads/{ad:slug}', [\App\Http\Controllers\PropertyController::class, 'show'])->name('property');

Route::get('categories/{category:slug}', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category');

Route::get('sellers/{seller:username}', function (User $seller) {
    return view('ads', [
        'ads' => $seller->ads,
        'categories' => Category::all()
    ]);
});

Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('sign-up', [RegisterController::class, 'index'])->name('register');
Route::post('sign-up', [RegisterController::class, 'store']);

