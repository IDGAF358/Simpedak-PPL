<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix("admin")->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Owner Route
Route::prefix("owner")->group(function () {
    Route::get("login", function () {
        return view("layouts.owner.guest");
    })->name("owner.login.index");

    Route::get("dashboard", function () {
        return view("pages.owner.dashboard.index");
    })->name("owner.dashboard.index");

    Route::get("produk/bahan-baku", function () {
        return view("pages.owner.raw_product.index");
    })->name("owner.product.raw-product.index");

    Route::get("produk/bahan-baku/riwayat", function () {
        return view("pages.owner.raw_product.history");
    })->name("owner.product.raw-product.history.index");

    Route::get("produk/bahan-jadi", function () {
        return view("pages.owner.serve_product.index");
    })->name("owner.product.serve-product.index");
});

require __DIR__ . '/auth.php';
