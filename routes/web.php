<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\UpdateProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\UserController;
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

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('init');

Route::get('menu', [HomeController::class, 'menu'])->name('menu');

Route::get('information', [HomeController::class, 'information'])->name('information');

Route::get('aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

Route::middleware(['auth'])->group(function () {
    //dashboard
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    //profile
    Route::view('profile', 'init.profile')->name('profile');
    Route::view('edit-profile', 'init.edit-profile')->name('edit-profile.edit');
    Route::patch('edit-profile', UpdateProfileController::class)->name('edit-profile.update');

    //settings
    Route::view('setting', 'init.setting')->name('setting');

    Route::middleware(['admin'])->group(function () {
        //admin
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users/{user:name}', [UserController::class, 'edit'])->name('users.edit');
        Route::patch('users/{user:name}', [UserController::class, 'update'])->name('users.update');
        Route::get('users/{user:name}/reset', [UserController::class, 'resetView'])->name('users.reset-view');
        Route::put('users/{user:name}/reset', [UserController::class, 'reset'])->name('users.reset');
        Route::delete('users/{user:name}', [UserController::class, 'destroy'])->name('users.destroy');

        //contact
        Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
        Route::patch('contact/{contact}', [ContactController::class, 'update'])->name('contact.update');

        //about us
        Route::get('others', [OtherController::class, 'index'])->name('others.index');
        Route::patch('others/{about}', [OtherController::class, 'update'])->name('others.update');
    });

    //categories
    Route::resource('categories', CategoryController::class)->parameters([
        'categories' => 'category:slug',
    ]);

    //products
    Route::resource('products', ProductController::class)->parameters([
        'products' => 'product:slug'
    ]);
});

// testing page
Route::view('tentang', 'homepage.tentang')->name('tentang');
Route::view('kontak', 'homepage.kontak')->name('about');

