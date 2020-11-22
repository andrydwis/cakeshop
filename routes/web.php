<?php

use App\Http\Controllers\CategoryController;
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
    Route::get('users', [UserController::class, 'index'])->name('users');

    //contact
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::patch('contact/{contact}', [ContactController::class, 'update'])->name('contact.update');

    //categories
    Route::resource('categories', CategoryController::class);
});
