<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
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

Route::view('/', 'init.main')->name('init');

Route::middleware(['auth'])->group(function () {
    //settings
    Route::view('setting', 'init.setting')->name('setting');

    //admin
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/{user:name}', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('users/{user:name}', [UserController::class, 'update'])->name('users.update');
    Route::get('users/{user:name}/reset', [UserController::class, 'resetView'])->name('users.reset-view');
    Route::put('users/{user:name}/reset', [UserController::class, 'reset'])->name('users.reset');
    Route::delete('users/{user:name}', [UserController::class, 'destroy'])->name('users.destroy');

    //contact
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::patch('contact/{contact}', [ContactController::class, 'update'])->name('contact.update');

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
Route::get('/homepage', function () {
    return view('testing.homepage');
})->name('homepage');
