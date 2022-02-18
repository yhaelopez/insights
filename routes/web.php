<?php

use App\Http\Controllers\RQueryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('posts', function() {
    return view('posts');
});


Route::get('/', function () {
    return redirect('login');
})->name('index');

Route::get('r', RQueryController::class)->name('r');

Auth::routes();

Route::controller(UserController::class)->group(function() {

    Route::match(['PUT', 'PATCH'], 'users/{user}/restore', 'restore')->name('users.restore');
    Route::get('users/{user}/permissions', 'permissions')->name('users.permissions');

});
Route::resource('users', UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mockup', [App\Http\Controllers\MockupController::class, 'index'])->name('mockup');
Route::get('/mockup-resultado', [App\Http\Controllers\MockupController::class, 'resultado'])->name('resultado');
Route::get('/mockup-cargas', [App\Http\Controllers\MockupController::class, 'cargas'])->name('cargas');
