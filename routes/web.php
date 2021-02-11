<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Role;
use App\Http\Controllers\BiikController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:reader', 'prefix' => 'reader', 'as' => 'reader.'], function() {
        Route::resource('books', BookController::class);
    });

    Route::group(['middleware' => 'role:librarian', 'prefix' => 'librarian', 'as' => 'librarian.'], function() {
       Route::resource('books', BooksController::class);
    });

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', UserController::class);
    });
});

Route::resource('books', BooksController::class);

Route::get('list',[BiikController::class, 'show']);

